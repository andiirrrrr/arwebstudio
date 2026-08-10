# 🚀 Laporan Audit Kesiapan Production — ARWebStudio

**Tanggal:** 10 Agustus 2026
**Stack:** Laravel 10.50.2 · PHP 8.3.33 · Filament 3.3.54 · MySQL · Vite 5 · Tailwind 3 · GSAP 3

---

## 🔴 KRITIS — Wajib Diperbaiki Sebelum Deploy

| # | Lokasi | Masalah | Status |
|---|---|---|---|
| 1 | `database/seeders/AdminUserSeeder.php:19` | Password admin **plaintext hardcoded** dan **ter-track di git**. | ✅ Diperbaiki — password dari `env('ADMIN_PASSWORD')` |
| 2 | `database/seeders/DatabaseSeeder.php` + `ServiceHeroSeeder.php` | Referensi `App\Models\ServiceHero` yang **tidak ada**. | ✅ Dihapus total (seeder, migration, tabel `service_hero`) |
| 3 | `.env` | `APP_ENV=local`, `APP_DEBUG=true`, `APP_URL=http://localhost`, dll. | ✅ Dibuat `.env.production` khusus |
| 4 | `app/Models/User.php` | Model `User` **tidak implement `FilamentUser`**. | ✅ Diperbaiki — implement `FilamentUser` + `canAccessPanel()` (cek `is_admin`) |

---

## 🟠 SEDANG — Perlu Ditinjau

| # | Lokasi | Masalah |
|---|---|---|
| 5 | `resources/views/blog-detail.blade.php:61` | `{!! $article->content !!}` — konten RichEditor dirender tanpa sanitasi server-side. Jika admin panel terkompromi → stored XSS. |
| 6 | `database/migrations/2026_07_29_060415_create_custom_app_offerings_table.php` | Tabel `custom_app_offerings` ada tapi **tidak ada model/resource/pemakaian** di mana pun — tabel yatim. |
| 7 | `routes/web.php` | Tidak ada route `/sitemap.xml` / `robots.txt` untuk SEO production. |
| 8 | Semua | Tidak ada test bermakna (hanya 2 `ExampleTest`). Tidak ada test untuk ContactController, PageController, helper. |
| 9 | `PageController.php:50-53` | Query `relatedProjects` pakai `LIKE` dua kali (case-insensitive redundant di MySQL). |

---

## 🟡 RENDAH — Catatan

| # | Lokasi | Masalah |
|---|---|---|
| 10 | `AppServiceProvider.php` | Kosong — belum ada registrasi policy/observer/macro. |
| 11 | Cache state | `config`/`route`/`event` **belum di-cache**. Views sudah cached. |
| 12 | `config/session.php` | `SESSION_DRIVER=file` ok untuk low-traffic, tapi `database`/`redis` lebih baik. |
| 13 | `.env.example` | Masih `APP_NAME=Laravel`, `MAIL_HOST=mailpit` — jangan di-copy mentah ke production. |

---

## ✅ SUDAH BAIK / SUDAH DIPERBAIKI

- `.env` masuk `.gitignore`; tidak ada secret/`.env`/kunci lain yang ter-track di git.
- `public/storage` symlink sudah ada.
- Rate limiting `throttle:5,1` pada POST `/kontak`.
- Validasi `subject` sudah ada di `ContactController` + `$fillable` Contact (fix dari laporan lama).
- Helper `site_setting()` + cache 3600s + flush pada saved — konfigurasi kontak dinamis.
- Semua halaman publik: link WA/email/lokasi/maps sudah memakai `site_setting()`/`whatsapp_link()`.
- Bug animasi workflow-step di service-detail sudah diperbaiki (hapus `clearProps`, pakai `overwrite:'auto'`).
- `npm run build` sukses; aset produksi tersedia.
- Filament: 4 resource (Service, Project, Package, Article) + ContactResource? — **perlu dicek** apakah resource Contact & Resource lainnya sudah lengkap.

---

## 📋 CHECKLIST DEPLOY PRODUCTION

> ⚠️ **PENTING: Data existing WAJIB dipertahankan.** Production memakai database `arwebstudio_db` yang sudah berisi data cocok untuk production. JANGAN jalankan `migrate:fresh` atau `db:seed` ulang — cukup `migrate` (menambah kolom/tabel baru saja, tidak menghapus data).

```bash
# 1. Sebelum deploy
composer install --no-dev --optimize-autoloader
npm ci && npm run build

# 2. Env production
#   Copy .env.production -> .env di server:
#   - APP_ENV=production, APP_DEBUG=false, APP_URL=https://...
#   - Sama dengan DB lokal: DB_DATABASE=arwebstudio_db
#   - Isi ADMIN_PASSWORD (untuk seeder admin, jika DB baru)

# 3. Database — JANGAN migrate:fresh, hanya migrate (amandemen, data aman)
php artisan migrate --force

# 4. Seeder — HANYA untuk DB baru/kosong. Untuk DB existing LEWATI.
#   php artisan db:seed --force

# 5. Cache
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache

# 6. Storage
php artisan storage:link

# 7. Test
php artisan test --env=testing
```

---

## 🎯 RENCANA PERBAIKAN (Urutan Prioritas)

1. ~~**Fix #1** — `AdminUserSeeder`~~ ✅ selesai: password dari env, hardcoded dihapus dari kode.
2. ~~**Fix #2** — ServiceHero~~ ✅ selesai: seeder/migration/referensi dihapus, tabel `service_hero` di-drop dari DB.
3. ~~**Fix #4** — `FilamentUser` + `canAccessPanel()`~~ ✅ selesai: user `is_admin` bisa akses `/admin`, kolom ditambahkan via migration.
4. ~~**Fix #3** — `.env.production`~~ ✅ selesai: file khusus production dibuat (ter-ignore git, tanpa secret asli).
5. **Fix #6** — Putuskan nasib tabel `custom_app_offerings` (buat model+resource, atau drop migration).
6. **Fix #5** — Sanitasi konten RichEditor saat render (HTMLPurifier / markdown whitelist).
7. Tambahkan test dasar (ContactController, helper, panel access).
