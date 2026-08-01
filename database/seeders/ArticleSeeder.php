<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        $articles = [
            // ===== TIPS =====
            [
                'title' => 'Cara Memilih Jasa Pembuatan Website yang Tepat',
                'category' => 'Tips',
                'content' => 'Dalam era digital seperti sekarang, memiliki website bukan lagi pilihan, melainkan kebutuhan bagi setiap bisnis. Namun, memilih jasa pembuatan website yang tepat bisa menjadi tantangan tersendiri, terutama jika Anda baru pertama kali membangun website.

1. Pahami Kebutuhan Bisnis Anda
Sebelum mencari jasa pembuatan website, tanyakan pada diri Anda: apa tujuan utama website ini? Apakah untuk profil perusahaan, toko online, atau landing page?

2. Cek Portofolio dan Pengalaman
Lihat portofolio website yang pernah dibuat. Perhatikan desain, kualitas kode, dan responsivitas di berbagai perangkat.

3. Perhatikan Teknologi yang Digunakan
Pastikan menggunakan teknologi modern seperti Laravel 11, Tailwind CSS, dan database yang aman.

4. Pastikan Ada Dukungan Pasca-Launch
Website yang baik tidak berhenti setelah diluncurkan. Pastikan ada garansi perbaikan bug dan layanan maintenance.

5. Perhatikan Biaya dengan Detail
Mintalah rincian biaya yang jelas, termasuk biaya pengembangan, hosting, dan maintenance.

Kesimpulan: Memilih jasa pembuatan website yang tepat membutuhkan riset dan pertimbangan yang matang. Jika Anda mencari jasa pembuatan website profesional di Makassar, ARWebStudio siap membantu Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(30),
            ],
            [
                'title' => 'Tips Memilih Domain dan Hosting untuk Website Bisnis',
                'category' => 'Tips',
                'content' => 'Memilih domain dan hosting adalah langkah penting dalam membangun website. Kesalahan dalam memilih bisa berdampak pada performa dan keamanan website. Berikut tips memilih domain dan hosting yang tepat:

1. Pilih Domain yang Relevan dan Mudah Diingat
Domain sebaiknya mencerminkan nama bisnis atau brand Anda. Pilih yang pendek, mudah diingat, dan mudah diucapkan.

2. Pilih Hosting dengan Performa Tinggi
Hosting yang baik memiliki uptime minimal 99.9%, kecepatan loading cepat, dan support 24/7.

3. Perhatikan Keamanan
Pastikan hosting menyediakan SSL certificate gratis dan proteksi dari serangan DDoS.

4. Pastikan Mudah Dikelola
Pilih hosting dengan control panel yang user-friendly seperti cPanel atau Plesk.

5. Bandwidth dan Storage yang Cukup
Sesuaikan dengan kebutuhan bisnis Anda. Jika website memiliki banyak gambar atau video, pilih paket dengan storage yang lebih besar.

Kesimpulan: Domain dan hosting adalah fondasi website Anda. Pilih dengan cermat dan jangan kompromi pada kualitas.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(25),
            ],
            [
                'title' => 'Tips Membuat Konten Website yang Menarik Pengunjung',
                'category' => 'Tips',
                'content' => 'Konten adalah raja dalam dunia digital. Website tanpa konten berkualitas tidak akan menarik pengunjung. Berikut tips membuat konten website yang menarik:

1. Kenali Target Audiens Anda
Pahami siapa yang akan membaca konten Anda. Buat konten yang relevan dengan kebutuhan mereka.

2. Gunakan Judul yang Menarik
Judul adalah hal pertama yang dilihat pengunjung. Buat judul yang jelas, menarik, dan mengandung kata kunci.

3. Tulis dengan Gaya yang Mudah Dipahami
Gunakan bahasa yang sederhana dan mudah dipahami. Hindari jargon yang terlalu teknis.

4. Sertakan Visual yang Menarik
Gambar, infografis, dan video membuat konten lebih menarik dan mudah dicerna.

5. Optimasi untuk SEO
Gunakan kata kunci secara natural, buat struktur heading yang baik, dan tulis meta description yang menarik.

Kesimpulan: Konten yang berkualitas akan membuat pengunjung betah dan kembali lagi ke website Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(20),
            ],
            [
                'title' => 'Tips Menulis Copywriting untuk Halaman Landing Page',
                'category' => 'Tips',
                'content' => 'Copywriting yang baik adalah kunci sukses landing page. Berikut tips menulis copywriting yang efektif:

1. Fokus pada Manfaat, Bukan Fitur
Jelaskan bagaimana produk atau layanan Anda bisa membantu pelanggan, bukan hanya mendaftarkan fitur.

2. Gunakan Bahasa yang Personal
Tulis seolah-olah Anda berbicara langsung dengan satu orang.

3. Buat Headline yang Kuat
Headline harus menarik perhatian dan membuat pengunjung ingin membaca lebih lanjut.

4. Sertakan Social Proof
Testimoni, ulasan, dan studi kasus meningkatkan kepercayaan pengunjung.

5. CTA yang Jelas dan Menarik
Call to Action harus jelas dan memberikan insentif untuk mengambil tindakan.

Kesimpulan: Copywriting yang baik bisa meningkatkan konversi landing page Anda secara signifikan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(15),
            ],
            [
                'title' => 'Tips Membangun Website dengan Budget Terbatas',
                'category' => 'Tips',
                'content' => 'Membangun website dengan budget terbatas bukanlah hal yang mustahil. Berikut tips yang bisa Anda terapkan:

1. Gunakan Platform yang Tepat
Pilih platform yang sesuai dengan kebutuhan dan budget Anda.

2. Manfaatkan Template Premium
Template premium lebih murah daripada custom design dari nol.

3. Fokus pada Fitur Utama
Jangan membuat fitur yang tidak diperlukan. Fokus pada fitur yang paling penting untuk bisnis Anda.

4. Gunakan Hosting yang Terjangkau
Pilih hosting dengan harga terjangkau namun tetap memiliki performa yang baik.

5. Pelajari Dasar-Dasar SEO
Optimasi SEO bisa dilakukan sendiri tanpa biaya tambahan.

Kesimpulan: Dengan perencanaan yang matang, Anda bisa memiliki website profesional meskipun dengan budget terbatas.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(10),
            ],

            // ===== UMKM =====
            [
                'title' => '5 Alasan UMKM Makassar Wajib Punya Website Profesional',
                'category' => 'UMKM',
                'content' => 'Di era digital seperti sekarang, UMKM di Makassar tidak bisa lagi mengandalkan strategi pemasaran konvensional saja. Berikut 5 alasan mengapa UMKM Makassar wajib memiliki website profesional:

1. Jangkauan Pasar yang Lebih Luas
Dengan website, bisnis Anda bisa diakses oleh siapa saja, kapan saja, dan di mana saja. Pelanggan dari berbagai daerah bisa menemukan bisnis Anda dengan mudah.

2. Meningkatkan Kredibilitas dan Kepercayaan
Bisnis dengan website profesional terlihat lebih kredibel dibandingkan bisnis yang hanya mengandalkan media sosial.

3. Efisiensi Biaya Pemasaran
Dibandingkan biaya iklan konvensional, website adalah investasi jangka panjang yang lebih hemat.

4. Tersedia 24 Jam Non-Stop
Website bekerja untuk Anda 24 jam sehari, 7 hari seminggu tanpa henti.

5. Analisis Data Pelanggan
Dengan website, Anda bisa melacak perilaku pengunjung untuk mengembangkan strategi bisnis.

Kesimpulan: Memiliki website profesional adalah langkah strategis bagi UMKM di Makassar untuk bersaing di era digital.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(28),
            ],
            [
                'title' => '7 Kesalahan Fatal dalam Membuat Website UMKM',
                'category' => 'UMKM',
                'content' => 'Banyak UMKM yang membuat website namun tidak mendapatkan hasil yang diharapkan. Berikut 7 kesalahan fatal yang sering terjadi:

1. Tidak Memiliki Tujuan yang Jelas
Website dibuat tanpa tujuan yang jelas, sehingga tidak efektif.

2. Desain yang Buruk
Desain yang tidak profesional membuat pengunjung tidak percaya.

3. Tidak Responsif
Website tidak bisa diakses dengan baik di perangkat mobile.

4. Konten yang Tidak Relevan
Konten tidak sesuai dengan kebutuhan target audiens.

5. Kecepatan Loading Lambat
Pengunjung akan meninggalkan website jika loading terlalu lama.

6. Tidak Ada CTA yang Jelas
Pengunjung bingung harus melakukan apa setelah membaca konten.

7. Tidak Dioptimasi untuk SEO
Website tidak ditemukan di mesin pencari.

Kesimpulan: Hindari kesalahan-kesalahan di atas agar website UMKM Anda efektif dan menghasilkan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(22),
            ],
            [
                'title' => '10 Manfaat Website untuk Bisnis Kecil dan Menengah',
                'category' => 'UMKM',
                'content' => 'Website memberikan banyak manfaat bagi bisnis kecil dan menengah. Berikut 10 manfaat yang bisa Anda dapatkan:

1. Meningkatkan Visibilitas Bisnis
2. Membangun Kredibilitas dan Kepercayaan
3. Menjangkau Pasar yang Lebih Luas
4. Efisiensi Biaya Pemasaran
5. Tersedia 24 Jam Non-Stop
6. Memudahkan Komunikasi dengan Pelanggan
7. Menampilkan Produk dan Layanan dengan Lebih Baik
8. Meningkatkan Penjualan dan Konversi
9. Memberikan Keunggulan Kompetitif
10. Memudahkan Analisis Bisnis

Kesimpulan: Website adalah investasi yang sangat menguntungkan bagi bisnis kecil dan menengah.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(18),
            ],

            // ===== WEBSITE =====
            [
                'title' => 'Perbedaan Landing Page, Company Profile, dan E-commerce',
                'category' => 'Website',
                'content' => 'Banyak pelaku bisnis masih bingung membedakan jenis-jenis website. Berikut perbedaan antara Landing Page, Company Profile, dan E-commerce:

1. Landing Page
Landing page adalah halaman website tunggal yang dirancang khusus untuk satu tujuan: konversi. Cocok untuk campaign marketing dan promo produk.

2. Company Profile
Company profile adalah website multi-halaman yang menampilkan profil perusahaan secara lengkap. Cocok untuk perusahaan jasa, konsultan, dan agensi.

3. E-commerce
E-commerce adalah website toko online dengan sistem transaksi lengkap. Cocok untuk bisnis retail dan distributor.

Kesimpulan: Pilih jenis website sesuai dengan tujuan bisnis Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(26),
            ],
            [
                'title' => 'Panduan Membuat Website Company Profile yang Profesional',
                'category' => 'Website',
                'content' => 'Company profile adalah wajah digital perusahaan Anda. Berikut panduan membuat website company profile yang profesional:

1. Tentukan Tujuan dan Target Audiens
2. Pilih Desain yang Elegan dan Profesional
3. Buat Navigasi yang Mudah
4. Sertakan Informasi yang Lengkap
5. Optimasi untuk SEO
6. Pastikan Responsif di Semua Perangkat
7. Tambahkan Testimoni dan Portofolio
8. Sertakan CTA yang Jelas

Kesimpulan: Company profile yang profesional akan meningkatkan kepercayaan calon klien dan mitra bisnis.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(24),
            ],
            [
                'title' => 'Perbedaan Website Statis dan Dinamis, Mana yang Tepat?',
                'category' => 'Website',
                'content' => 'Memahami perbedaan website statis dan dinamis penting untuk memilih jenis website yang tepat:

Website Statis:
- Konten tetap dan tidak berubah
- Loading lebih cepat
- Cocok untuk informasi yang jarang diupdate

Website Dinamis:
- Konten bisa diupdate secara berkala
- Memiliki database dan CMS
- Cocok untuk bisnis yang membutuhkan update konten rutin

Kesimpulan: Pilih website statis jika konten Anda jarang berubah, dan pilih website dinamis jika Anda perlu update konten secara rutin.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(14),
            ],
            [
                'title' => 'Mengapa Mobile-Friendly Website Sangat Penting di 2024',
                'category' => 'Website',
                'content' => 'Lebih dari 70% trafik web berasal dari perangkat mobile. Berikut alasan mengapa website mobile-friendly sangat penting:

1. Pengalaman Pengguna yang Lebih Baik
2. Meningkatkan Ranking SEO (Google Mobile-First Index)
3. Meningkatkan Konversi dan Penjualan
4. Menjangkau Audiens yang Lebih Luas
5. Keunggulan Kompetitif

Kesimpulan: Website yang mobile-friendly bukan lagi pilihan, tapi keharusan di era digital saat ini.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(8),
            ],
            [
                'title' => 'Panduan Membuat Website Portofolio yang Menarik',
                'category' => 'Website',
                'content' => 'Website portofolio adalah alat yang sangat efektif untuk menampilkan karya Anda. Berikut panduan membuat website portofolio yang menarik:

1. Pilih Template yang Sesuai
2. Tampilkan Karya Terbaik Anda
3. Buat Navigasi yang Mudah
4. Sertakan Deskripsi Setiap Proyek
5. Tambahkan Testimoni Klien
6. Sertakan CTA yang Jelas

Kesimpulan: Website portofolio yang menarik akan membantu Anda mendapatkan lebih banyak klien.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(5),
            ],

            // ===== TEKNOLOGI =====
            [
                'title' => 'Keuntungan Menggunakan Laravel untuk Pengembangan Website',
                'category' => 'Teknologi',
                'content' => 'Laravel adalah salah satu framework PHP paling populer di dunia. Berikut keuntungan menggunakan Laravel:

1. Keamanan Terjamin
2. Performa Tinggi
3. Mudah Dikelola
4. Komunitas Besar
5. Fitur Lengkap

Kesimpulan: Laravel adalah pilihan tepat untuk pengembangan website yang aman, cepat, dan mudah dikelola.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(23),
            ],
            [
                'title' => 'Cara Menggunakan Google Analytics untuk Website Bisnis',
                'category' => 'Teknologi',
                'content' => 'Google Analytics adalah alat yang sangat powerful untuk menganalisis pengunjung website. Berikut cara menggunakan Google Analytics:

1. Buat Akun Google Analytics
2. Pasang Tracking Code di Website
3. Pelajari Dashboard dan Fitur
4. Analisis Data Pengunjung
5. Optimasi Berdasarkan Data

Kesimpulan: Google Analytics membantu Anda memahami perilaku pengunjung dan mengoptimalkan website untuk hasil yang lebih baik.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(12),
            ],

            // ===== E-COMMERCE =====
            [
                'title' => 'Cara Meningkatkan Penjualan dengan Website Toko Online',
                'category' => 'E-commerce',
                'content' => 'Website toko online bukan hanya tentang tampilan yang cantik. Berikut cara meningkatkan penjualan:

1. Desain yang Menarik dan Mudah Dinavigasi
2. Tampilkan Produk dengan Foto Berkualitas
3. Berikan Deskripsi Produk yang Detail
4. Mudahkan Proses Checkout
5. Sediakan Metode Pembayaran yang Beragam

Kesimpulan: Dengan strategi yang tepat, penjualan bisnis Anda bisa meningkat drastis.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(19),
            ],
            [
                'title' => 'Pentingnya Kecepatan Loading untuk Konversi Penjualan',
                'category' => 'E-commerce',
                'content' => 'Kecepatan loading website sangat mempengaruhi konversi penjualan. Berikut alasannya:

1. Pengunjung Tidak Sabar Menunggu
2. Mempengaruhi Ranking SEO
3. Mempengaruhi Pengalaman Pengguna
4. Meningkatkan Kepercayaan Pelanggan

Kesimpulan: Optimasi kecepatan loading adalah investasi yang sangat menguntungkan untuk bisnis online Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(6),
            ],

            // ===== SEO =====
            [
                'title' => 'Cara Optimasi Kecepatan Website untuk SEO',
                'category' => 'SEO',
                'content' => 'Kecepatan website adalah salah satu faktor ranking di Google. Berikut cara mengoptimalkan kecepatan website:

1. Optimasi Gambar
2. Gunakan Caching
3. Minify CSS dan JavaScript
4. Gunakan CDN
5. Pilih Hosting yang Berkualitas

Kesimpulan: Website yang cepat akan meningkatkan pengalaman pengguna dan ranking SEO Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(16),
            ],
            [
                'title' => 'Panduan SEO untuk Pemula: Cara Mulai Optimasi Website',
                'category' => 'SEO',
                'content' => 'SEO adalah investasi jangka panjang untuk bisnis Anda. Berikut panduan SEO untuk pemula:

1. Riset Kata Kunci
2. Optimasi On-Page
3. Optimasi Off-Page
4. Technical SEO
5. Monitor dan Evaluasi

Kesimpulan: Mulailah dengan langkah sederhana dan konsisten untuk melihat hasil yang signifikan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(11),
            ],
            [
                'title' => '7 Tips Meningkatkan Trafik Website Organik',
                'category' => 'SEO',
                'content' => 'Trafik organik adalah sumber trafik paling berharga. Berikut 7 tips meningkatkannya:

1. Buat Konten Berkualitas
2. Optimasi SEO On-Page
3. Bangun Backlink
4. Optimasi Kecepatan Website
5. Aktif di Media Sosial
6. Gunakan Google Search Console
7. Perbarui Konten Secara Rutin

Kesimpulan: Dengan konsistensi, trafik organik website Anda akan terus meningkat.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(3),
            ],

            // ===== KEAMANAN =====
            [
                'title' => 'Mengapa Website Anda Membutuhkan SSL Certificate',
                'category' => 'Keamanan',
                'content' => 'SSL certificate adalah standar keamanan wajib untuk website modern. Berikut alasannya:

1. Melindungi Data Pengguna
2. Meningkatkan Ranking SEO
3. Membangun Kepercayaan Pengunjung
4. Memenuhi Standar PCI Compliance

Kesimpulan: SSL certificate adalah investasi kecil untuk keamanan dan kepercayaan website Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(21),
            ],

            // ===== DESAIN =====
            [
                'title' => 'Cara Memilih Warna yang Tepat untuk Website Brand Anda',
                'category' => 'Desain',
                'content' => 'Warna memiliki pengaruh besar terhadap persepsi brand. Berikut cara memilih warna yang tepat:

1. Pahami Psikologi Warna
2. Sesuaikan dengan Brand Identity
3. Perhatikan Kontras dan Keterbacaan
4. Konsistensi di Semua Halaman

Kesimpulan: Pemilihan warna yang tepat akan memperkuat brand identity dan meningkatkan pengalaman pengguna.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(13),
            ],
            [
                'title' => '5 Tren Desain Website yang Akan Populer di 2025',
                'category' => 'Desain',
                'content' => 'Desain website terus berkembang. Berikut 5 tren desain yang akan populer di 2025:

1. Dark Mode yang Lebih Baik
2. Animasi Mikro Interaktif
3. Tipografi Berani dan Besar
4. Desain 3D dan Immersive
5. Minimalis dengan Warna Berani

Kesimpulan: Mengikuti tren desain terbaru akan membuat website Anda terlihat modern dan relevan.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'Cara Memilih Font yang Tepat untuk Website Profesional',
                'category' => 'Desain',
                'content' => 'Font mempengaruhi keterbacaan dan persepsi brand. Berikut cara memilih font yang tepat:

1. Pilih Font yang Mudah Dibaca
2. Sesuaikan dengan Brand Identity
3. Perhatikan Hierarki Tipografi
4. Batasi Jumlah Font yang Digunakan

Kesimpulan: Font yang tepat akan meningkatkan keterbacaan dan profesionalisme website Anda.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(2),
            ],

            // ===== UMKM =====
            [
                'title' => 'Cara Mengelola Website Sendiri Tanpa Bantuan Developer',
                'category' => 'Tips',
                'content' => 'Setelah website selesai dibangun, Anda perlu bisa mengelolanya sendiri. Berikut tips mengelola website tanpa bantuan developer:

1. Gunakan CMS yang User-Friendly
2. Pelajari Cara Update Konten
3. Backup Website Secara Rutin
4. Monitor Keamanan Website

Kesimpulan: Dengan CMS yang baik, Anda bisa mengelola website sendiri tanpa harus bergantung pada developer setiap saat.',
                'author' => 'ARWebStudio',
                'is_published' => true,
                'published_at' => now()->subDays(1),
            ],
        ];

        foreach ($articles as $article) {
            Article::create([
                'title' => $article['title'],
                'slug' => Str::slug($article['title']),
                'category' => $article['category'],
                'content' => $article['content'],
                'author' => $article['author'] ?? 'ARWebStudio',
                'is_published' => $article['is_published'] ?? true,
                'published_at' => $article['published_at'] ?? now(),
                'views' => rand(10, 500),
            ]);
        }

        $this->command->info('✅ ' . count($articles) . ' artikel berhasil dibuat!');
    }
}