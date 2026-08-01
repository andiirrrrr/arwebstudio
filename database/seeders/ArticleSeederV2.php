<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeederV2 extends Seeder
{
    public function run(): void
    {
        $articles = [
            // ===== DIGITAL MARKETING =====
            [
                'title' => 'Strategi Digital Marketing untuk UMKM Pemula',
                'category' => 'Digital Marketing',
                'content' => 'Digital marketing adalah kunci sukses bisnis di era modern. Berikut strategi digital marketing untuk UMKM pemula:

1. Kenali Target Audiens Anda
Pahami siapa pelanggan ideal Anda, apa kebutuhan mereka, dan di mana mereka berada secara online.

2. Bangun Website yang Profesional
Website adalah pusat dari semua aktivitas digital marketing Anda. Pastikan website Anda cepat, responsif, dan mudah digunakan.

3. Manfaatkan Media Sosial
Pilih platform yang sesuai dengan bisnis Anda. Instagram untuk produk visual, LinkedIn untuk B2B, TikTok untuk konten kreatif.

4. Optimasi SEO
Pastikan website Anda mudah ditemukan di Google dengan konten yang relevan dan struktur yang baik.

5. Gunakan Email Marketing
Bangun database pelanggan dan kirimkan newsletter berkala untuk menjaga hubungan.

Kesimpulan: Digital marketing adalah investasi jangka panjang yang akan membawa bisnis Anda ke level berikutnya.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(1),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Membangun Brand dengan Website Profesional',
                'category' => 'Digital Marketing',
                'content' => 'Website adalah wajah digital brand Anda. Berikut cara membangun brand dengan website profesional:

1. Konsistensi Visual
Gunakan warna, font, dan elemen desain yang konsisten dengan identitas brand Anda.

2. Ceritakan Kisah Brand
Tulis tentang visi, misi, dan nilai-nilai brand Anda. Cerita yang autentik akan membangun koneksi emosional.

3. Tampilkan Testimoni dan Ulasan
Social proof meningkatkan kepercayaan calon pelanggan.

4. Buat Konten yang Bernilai
Bagikan pengetahuan dan wawasan yang bermanfaat untuk audiens Anda.

5. Optimasi Pengalaman Pengguna
Pastikan website mudah dinavigasi dan memberikan pengalaman yang menyenangkan.

Kesimpulan: Website yang profesional adalah fondasi brand digital yang kuat.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(2),
                'views' => rand(10, 500),
            ],
            [
                'title' => '7 Tips Meningkatkan Konversi Website dengan Copywriting',
                'category' => 'Digital Marketing',
                'content' => 'Copywriting adalah seni menulis untuk menjual. Berikut 7 tips meningkatkan konversi dengan copywriting:

1. Tulis Headline yang Menarik Perhatian
Headline adalah hal pertama yang dilihat pengunjung. Buat yang kuat dan menggugah rasa ingin tahu.

2. Fokus pada Manfaat
Jelaskan bagaimana produk atau layanan Anda bisa membantu pelanggan.

3. Gunakan Bahasa yang Personal
Tulis seolah-olah Anda berbicara dengan satu orang.

4. Buat CTA yang Jelas
Call to Action harus spesifik dan memberikan insentif.

5. Sertakan Social Proof
Testimoni dan ulasan meningkatkan kepercayaan.

6. Gunakan Storytelling
Cerita yang menarik akan membuat pengunjung terhubung secara emosional.

7. Test dan Optimasi
Lakukan A/B testing untuk mengetahui apa yang paling efektif.

Kesimpulan: Copywriting yang efektif akan meningkatkan konversi website Anda secara signifikan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(3),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Panduan Google My Business untuk Bisnis Lokal Makassar',
                'category' => 'Digital Marketing',
                'content' => 'Google My Business adalah alat gratis yang sangat powerful untuk bisnis lokal. Berikut panduan lengkapnya:

1. Daftarkan Bisnis Anda
Buat akun Google My Business dan verifikasi lokasi Anda.

2. Lengkapi Informasi
Isi semua informasi: nama, alamat, jam operasional, kontak, dan kategori bisnis.

3. Upload Foto Berkualitas
Foto produk, interior, dan eksterior meningkatkan kepercayaan pelanggan.

4. Kelola Ulasan Pelanggan
Balas semua ulasan, baik positif maupun negatif, dengan profesional.

5. Posting Update Berkala
Bagikan informasi terbaru, promo, atau event di Google My Business.

6. Pantau Insight
Lihat bagaimana pelanggan menemukan bisnis Anda dan optimasi strategi.

Kesimpulan: Google My Business adalah langkah pertama yang wajib untuk bisnis lokal di Makassar.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(4),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Mengukur Keberhasilan Digital Marketing dengan Analytics',
                'category' => 'Digital Marketing',
                'content' => 'Mengukur keberhasilan digital marketing sangat penting untuk optimasi. Berikut cara mengukurnya:

1. Tentukan Tujuan (Goals)
Apa yang ingin Anda capai? Penjualan, leads, atau brand awareness?

2. Gunakan Google Analytics
Pasang tracking code dan pelajari dashboard.

3. Pantau Metrik Utama (KPIs)
Perhatikan metrik seperti trafik, bounce rate, konversi, dan retention.

4. Analisis Data
Apa yang berhasil dan apa yang tidak? Temukan pola dan insight.

5. Lakukan Optimasi
Berdasarkan data, lakukan perbaikan pada strategi Anda.

Kesimpulan: Data adalah dasar untuk mengambil keputusan yang lebih baik dalam digital marketing.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(5),
                'views' => rand(10, 500),
            ],

            // ===== KEUANGAN =====
            [
                'title' => 'Biaya Pembuatan Website: Panduan Lengkap 2024',
                'category' => 'Keuangan',
                'content' => 'Biaya pembuatan website bervariasi tergantung kebutuhan Anda. Berikut panduan lengkapnya:

1. Website Sederhana (Landing Page): Rp 1.500.000 - Rp 5.000.000
2. Company Profile: Rp 3.000.000 - Rp 10.000.000
3. Website E-commerce: Rp 7.000.000 - Rp 20.000.000
4. Custom Web App: Rp 10.000.000 - Rp 50.000.000

Faktor yang Mempengaruhi Biaya:
- Jumlah halaman
- Fitur dan fungsionalitas
- Desain kustom vs template
- Integrasi pihak ketiga
- Timeline pengerjaan

Biaya Berulang Tahunan:
- Hosting: Rp 500.000 - Rp 2.000.000
- Domain: Rp 150.000 - Rp 300.000
- Maintenance: Rp 300.000 - Rp 1.500.000

Kesimpulan: Pilih paket yang sesuai dengan kebutuhan dan budget Anda. Investasi di website adalah investasi jangka panjang.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(6),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Menghitung ROI Website untuk Bisnis Anda',
                'category' => 'Keuangan',
                'content' => 'ROI (Return on Investment) website mengukur seberapa menguntungkan investasi website Anda. Berikut cara menghitungnya:

Rumus ROI:
ROI = (Keuntungan - Biaya Investasi) / Biaya Investasi x 100%

Langkah-langkah:
1. Tentukan Biaya Investasi
Total biaya pembuatan + biaya tahunan (hosting, maintenance).

2. Ukur Keuntungan
Penjualan online, leads, pengurangan biaya marketing.

3. Hitung ROI
Gunakan rumus di atas.

Contoh:
Biaya website: Rp 10.000.000
Penjualan online per tahun: Rp 50.000.000
ROI = (50.000.000 - 10.000.000) / 10.000.000 x 100% = 400%

Kesimpulan: Website dengan ROI positif adalah investasi yang menguntungkan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(7),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Tips Menghemat Biaya Pembuatan Website tanpa Mengorbankan Kualitas',
                'category' => 'Keuangan',
                'content' => 'Membangun website berkualitas dengan budget terbatas bukan hal yang mustahil. Berikut tipsnya:

1. Gunakan Template Premium
Lebih murah daripada custom design dari nol.

2. Pilih Fitur yang Esensial
Jangan buat fitur yang tidak benar-benar dibutuhkan.

3. Gunakan Open Source
Banyak tools open source yang berkualitas dan gratis.

4. Pilih Hosting yang Tepat
Sesuaikan hosting dengan kebutuhan, jangan berlebihan.

5. Rencanakan dengan Matang
Perencanaan yang baik menghindari perubahan biaya di tengah jalan.

6. Manfaatkan Freelancer
Lebih fleksibel daripada agensi besar.

Kesimpulan: Website berkualitas bisa dibuat dengan budget yang terjangkau jika direncanakan dengan baik.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(8),
                'views' => rand(10, 500),
            ],

            // ===== TEKNOLOGI =====
            [
                'title' => 'Perbandingan Framework PHP: Laravel vs CodeIgniter vs Symfony',
                'category' => 'Teknologi',
                'content' => 'Memilih framework PHP yang tepat sangat penting untuk pengembangan website. Berikut perbandingannya:

Laravel:
- Kelebihan: Fitur lengkap, komunitas besar, dokumentasi baik
- Kekurangan: Berat, learning curve tinggi
- Cocok untuk: Aplikasi besar dan kompleks

CodeIgniter:
- Kelebihan: Ringan, cepat, mudah dipelajari
- Kekurangan: Fitur terbatas
- Cocok untuk: Aplikasi sederhana dan menengah

Symfony:
- Kelebihan: Arsitektur kuat, scalable
- Kekurangan: Kompleks, learning curve tinggi
- Cocok untuk: Enterprise-level aplikasi

Kesimpulan: Pilih framework yang sesuai dengan kebutuhan proyek dan tim Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(9),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Memilih Tech Stack untuk Website Bisnis Anda',
                'category' => 'Teknologi',
                'content' => 'Tech stack adalah kombinasi teknologi yang digunakan untuk membangun website. Berikut cara memilihnya:

1. Tentukan Kebutuhan Proyek
Aplikasi sederhana vs kompleks, statis vs dinamis.

2. Pertimbangkan Tim
Apa yang dikuasai oleh tim Anda?

3. Evaluasi Performa
Apakah tech stack mendukung performa tinggi?

4. Pertimbangkan Skalabilitas
Apakah bisa berkembang seiring pertumbuhan bisnis?

5. Keamanan
Pastikan tech stack memiliki fitur keamanan yang baik.

6. Komunitas dan Dukungan
Semakin besar komunitas, semakin mudah mencari bantuan.

Kesimpulan: Pilih tech stack yang seimbang antara kebutuhan proyek, kemampuan tim, dan budget.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(10),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Mengoptimalkan Database untuk Website Cepat',
                'category' => 'Teknologi',
                'content' => 'Database yang lambat adalah penyebab utama website lambat. Berikut cara mengoptimalkan database:

1. Gunakan Indeks yang Tepat
Indeks mempercepat query SELECT.

2. Normalisasi Database
Hindari duplikasi data.

3. Gunakan Query yang Efisien
Hindari query yang berat dan tidak perlu.

4. Cache Query
Simpan hasil query yang sering diakses.

5. Gunakan Connection Pooling
Optimasi koneksi database.

6. Lakukan Maintenance Rutin
Optimasi tabel dan bersihkan data yang tidak berguna.

Kesimpulan: Database yang teroptimasi akan meningkatkan kecepatan website secara signifikan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(11),
                'views' => rand(10, 500),
            ],

            // ===== DESAIN =====
            [
                'title' => 'Prinsip Desain UI/UX yang Wajib Diketahui Developer',
                'category' => 'Desain',
                'content' => 'UI/UX adalah bagian penting dari pengembangan website. Berikut prinsip yang wajib diketahui:

1. Konsistensi
Gunakan elemen yang sama di seluruh halaman.

2. Feedback
Berikan respons yang jelas untuk setiap aksi pengguna.

3. Affordance
Buat elemen terlihat seperti fungsinya.

4. Kemudahan Navigasi
Pengguna harus mudah menemukan apa yang mereka cari.

5. Kecepatan
Website yang cepat meningkatkan pengalaman pengguna.

6. Aksesibilitas
Pastikan website bisa diakses oleh semua orang.

Kesimpulan: UI/UX yang baik akan meningkatkan kepuasan dan retensi pengguna.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(12),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Membuat Desain Website yang Memikat dalam 5 Langkah',
                'category' => 'Desain',
                'content' => 'Desain yang memikat adalah kunci kesuksesan website. Berikut 5 langkah membuat desain website yang menarik:

1. Mulai dengan Wireframe
Buat sketsa kasar untuk memvisualisasikan layout.

2. Pilih Palet Warna
Gunakan 3-5 warna yang konsisten dengan brand.

3. Pilih Tipografi yang Tepat
Gunakan font yang mudah dibaca dan sesuai dengan brand.

4. Gunakan Visual yang Menarik
Gambar, ilustrasi, dan video berkualitas tinggi.

5. Tes dengan Pengguna
Minta feedback dari pengguna nyata untuk perbaikan.

Kesimpulan: Desain yang memikat akan membuat pengunjung betah dan kembali lagi.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(13),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Inspirasi Desain Website untuk Berbagai Industri',
                'category' => 'Desain',
                'content' => 'Desain website berbeda-beda tergantung industri. Berikut inspirasi untuk berbagai industri:

1. E-commerce: Fokus pada produk, navigasi mudah, checkout yang cepat
2. Perusahaan Jasa: Profesional, testimoni, studi kasus
3. Kreatif: Visual yang bold, portfolio, storytelling
4. Pendidikan: Clean, terstruktur, mudah diakses
5. Kesehatan: Tenang, informatif, mudah digunakan

Kesimpulan: Desain harus disesuaikan dengan target audiens dan tujuan bisnis.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(14),
                'views' => rand(10, 500),
            ],

            // ===== SEO =====
            [
                'title' => 'Cara Meningkatkan Domain Authority Website Anda',
                'category' => 'SEO',
                'content' => 'Domain Authority adalah metrik yang memprediksi kemampuan website untuk ranking di Google. Berikut cara meningkatkannya:

1. Bangun Backlink Berkualitas
Dapatkan link dari website otoritas di niche Anda.

2. Buat Konten yang In-Depth
Konten panjang dan mendalam lebih disukai Google.

3. Optimasi SEO On-Page
Perbaiki struktur heading, meta tag, dan internal linking.

4. Perbaiki Technical SEO
Kecepatan website, mobile-friendly, dan keamanan.

5. Social Media Signal
Aktif di media sosial meningkatkan visibilitas.

Kesimpulan: Domain Authority yang tinggi membutuhkan konsistensi dan strategi jangka panjang.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(15),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Panduan Local SEO untuk Bisnis di Makassar',
                'category' => 'SEO',
                'content' => 'Local SEO membantu bisnis lokal ditemukan oleh pelanggan di sekitar. Berikut panduan Local SEO untuk Makassar:

1. Google My Business
Daftar dan optimasi profil Google My Business.

2. Local Keywords
Gunakan kata kunci seperti "Makassar", "Sulawesi Selatan" dalam konten.

3. Local Backlink
Dapatkan link dari website lokal Makassar.

4. Ulasan Pelanggan
Kumpulkan ulasan positif dari pelanggan di Makassar.

5. NAP Consistency
Nama, Alamat, dan Nomor Telepon konsisten di semua platform.

Kesimpulan: Local SEO adalah strategi efektif untuk bisnis yang melayani pelanggan lokal.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(16),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Mengoptimalkan Gambar untuk SEO dan Kecepatan Website',
                'category' => 'SEO',
                'content' => 'Gambar yang dioptimalkan meningkatkan SEO dan kecepatan website. Berikut caranya:

1. Gunakan Format yang Tepat
WebP untuk kualitas tinggi dengan ukuran kecil.

2. Kompres Gambar
Gunakan tools seperti TinyPNG atau ImageOptim.

3. Beri Nama File yang Deskriptif
Gunakan kata kunci dalam nama file gambar.

4. Isi Alt Text
Deskripsikan gambar dengan kata kunci yang relevan.

5. Gunakan Lazy Loading
Muati gambar hanya saat terlihat oleh pengguna.

Kesimpulan: Optimasi gambar meningkatkan kecepatan website dan SEO secara bersamaan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(17),
                'views' => rand(10, 500),
            ],

            // ===== E-COMMERCE =====
            [
                'title' => 'Cara Memilih Platform E-commerce yang Tepat untuk Bisnis Anda',
                'category' => 'E-commerce',
                'content' => 'Memilih platform e-commerce yang tepat sangat penting untuk kesuksesan toko online. Berikut panduannya:

1. Shopify: Mudah digunakan, banyak fitur, cocok untuk pemula
2. WooCommerce: Fleksibel, integrasi WordPress, cocok untuk bisnis yang sudah punya website
3. Magento: Powerful, scalable, cocok untuk enterprise
4. Custom: Kontrol penuh, cocok untuk bisnis dengan kebutuhan spesifik

Faktor yang Perlu Dipertimbangkan:
- Budget
- Fitur yang dibutuhkan
- Kemudahan penggunaan
- Skalabilitas
- Dukungan teknis

Kesimpulan: Pilih platform yang sesuai dengan skala bisnis dan kebutuhan Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(18),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Meningkatkan Retensi Pelanggan di Toko Online',
                'category' => 'E-commerce',
                'content' => 'Mempertahankan pelanggan lebih murah daripada mendapatkan pelanggan baru. Berikut caranya:

1. Program Loyalty
Beri reward untuk pelanggan setia.

2. Email Marketing
Kirimkan newsletter dan promo eksklusif.

3. Personalisasi
Tampilkan produk yang relevan dengan minat pelanggan.

4. Customer Service yang Baik
Respon cepat dan solusi yang memuaskan.

5. Follow-up
Tanyakan kepuasan pelanggan setelah pembelian.

Kesimpulan: Retensi pelanggan yang baik meningkatkan pendapatan jangka panjang.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(19),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Tips Keamanan untuk Toko Online yang Aman dari Hacker',
                'category' => 'E-commerce',
                'content' => 'Keamanan adalah prioritas utama untuk toko online. Berikut tips melindungi toko online Anda:

1. Gunakan SSL Certificate
Enkripsi data pelanggan.

2. Update Secara Rutin
Update platform dan plugin ke versi terbaru.

3. Gunakan Password yang Kuat
Terapkan kebijakan password yang kuat.

4. Backup Data
Backup secara rutin untuk mengantisipasi kehilangan data.

5. Monitoring Keamanan
Pantau aktivitas mencurigakan secara berkala.

6. Gunakan Payment Gateway Terpercaya
Pilih payment gateway yang memiliki standar keamanan tinggi.

Kesimpulan: Keamanan adalah investasi penting untuk menjaga kepercayaan pelanggan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(20),
                'views' => rand(10, 500),
            ],

            // ===== UMKM =====
            [
                'title' => 'Cara Memulai Bisnis Online untuk Pemula di Makassar',
                'category' => 'UMKM',
                'content' => 'Memulai bisnis online tidak pernah semudah sekarang. Berikut panduan untuk pemula di Makassar:

1. Tentukan Niche
Pilih produk atau jasa yang Anda kuasai.

2. Bangun Website
Website adalah pusat dari bisnis online Anda.

3. Aktif di Media Sosial
Mulai dengan Instagram dan WhatsApp Business.

4. Siapkan Sistem Pembayaran
QRIS, transfer bank, atau e-wallet.

5. Promosikan Bisnis
Mulai dari teman dan keluarga, lalu perluas jangkauan.

6. Kelola Ulasan
Minta pelanggan untuk memberikan ulasan.

Kesimpulan: Bisnis online bisa dimulai dengan modal kecil dan konsistensi.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(21),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Membangun Brand Lokal yang Kuat di Era Digital',
                'category' => 'UMKM',
                'content' => 'Brand lokal memiliki potensi besar di era digital. Berikut cara membangun brand lokal yang kuat:

1. Ceritakan Keunikan Lokal
Tampilkan ciri khas lokal sebagai nilai jual.

2. Gunakan Bahasa dan Visual Lokal
Sesuaikan dengan budaya dan preferensi lokal.

3. Libatkan Komunitas
Bangun hubungan dengan komunitas di sekitar.

4. Konsistensi Brand
Gunakan elemen brand yang sama di semua platform.

5. Kolaborasi Lokal
Bekerja sama dengan bisnis lokal lainnya.

Kesimpulan: Brand lokal yang kuat akan memiliki loyalitas pelanggan yang tinggi.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(22),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Peluang Bisnis Digital untuk UMKM di Era AI 2025',
                'category' => 'UMKM',
                'content' => 'AI membuka peluang baru bagi UMKM. Berikut peluang bisnis digital di era AI:

1. Chatbot untuk Customer Service
AI dapat menjawab pertanyaan pelanggan 24/7.

2. Personalisasi Produk
AI membantu merekomendasikan produk yang sesuai.

3. Analisis Data Pelanggan
AI membantu memahami perilaku pelanggan.

4. Otomatisasi Pemasaran
AI membantu membuat kampanye pemasaran yang efektif.

5. Optimasi Harga
AI membantu menentukan harga yang kompetitif.

Kesimpulan: UMKM yang cepat mengadopsi AI akan memiliki keunggulan kompetitif.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(23),
                'views' => rand(10, 500),
            ],

            // ===== WEBSITE =====
            [
                'title' => 'Cara Memilih Jenis Website yang Tepat untuk Bisnis Anda',
                'category' => 'Website',
                'content' => 'Memilih jenis website yang tepat sangat penting untuk mencapai tujuan bisnis. Berikut panduannya:

1. Website Statis
Cocok untuk: Informasi yang jarang berubah
Contoh: Landing Page, Company Profile sederhana

2. Website Dinamis (CMS)
Cocok untuk: Konten yang sering diupdate
Contoh: Blog, News Portal

3. E-commerce
Cocok untuk: Menjual produk secara online
Contoh: Toko Online, Marketplace

4. Custom Web App
Cocok untuk: Kebutuhan bisnis spesifik
Contoh: Sistem Manajemen, Dashboard, SaaS

Kesimpulan: Pilih jenis website yang paling sesuai dengan tujuan dan kebutuhan bisnis Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(24),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Panduan Membuat Website dengan Prinsip Mobile-First',
                'category' => 'Website',
                'content' => 'Mobile-First adalah prinsip desain yang memprioritaskan pengalaman mobile. Berikut panduannya:

1. Mulai dari Mobile
Desain untuk layar terkecil terlebih dahulu.

2. Touch-Friendly
Buat tombol dan elemen yang mudah diklik dengan jari.

3. Konten Prioritas
Tampilkan konten terpenting di bagian atas.

4. Kecepatan Loading
Optimasi untuk kecepatan di jaringan mobile.

5. Navigasi Sederhana
Gunakan menu yang mudah diakses di mobile.

Kesimpulan: Mobile-First adalah standar desain website modern yang wajib diterapkan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(25),
                'views' => rand(10, 500),
            ],
            [
                'title' => 'Cara Membuat Website yang Ramah Lingkungan (Green Hosting)',
                'category' => 'Website',
                'content' => 'Green hosting adalah tren website ramah lingkungan. Berikut cara membuat website yang lebih ramah lingkungan:

1. Pilih Hosting Hijau
Gunakan hosting yang menggunakan energi terbarukan.

2. Optimasi Energi
Kurangi konsumsi energi dengan optimasi kode dan gambar.

3. Desain Minimalis
Desain yang sederhana mengurangi data yang perlu di-load.

4. Cache dan CDN
Kurangi beban server dengan cache dan CDN.

5. Hapus Data Tidak Berguna
Bersihkan database dari data yang tidak diperlukan.

Kesimpulan: Website ramah lingkungan adalah langkah kecil untuk masa depan yang lebih baik.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(26),
                'views' => rand(10, 500),
            ],
        ];

        foreach ($articles as $article) {
            $slug = Str::slug($article['title']);
            $originalSlug = $slug;
            $counter = 1;
            
            while (Article::where('slug', $slug)->exists()) {
    $slug = $originalSlug . '-' . $counter;
    $counter++;
}

            Article::create([
                'title' => $article['title'],
                'slug' => $slug,
                'category' => $article['category'],
                'content' => $article['content'],
                'author' => $article['author'] ?? 'ARWebStudio',
                'is_published' => $article['is_published'] ?? true,
                'published_at' => $article['published_at'] ?? now(),
                'views' => $article['views'] ?? rand(10, 500),
            ]);
        }

        $this->command->info('✅ ' . count($articles) . ' artikel baru berhasil dibuat!');
    }
}