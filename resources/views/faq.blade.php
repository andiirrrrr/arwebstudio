@extends('layouts.app')

@section('title', 'FAQ - ARWebStudio')

@section('content')
<div class="flex flex-col w-full bg-[#101415]">

    <!-- ===== HERO SECTION ===== -->
    <section class="relative px-5 lg:px-16 py-24 lg:py-32 overflow-hidden border-b border-[rgba(74,127,199,0.2)]">
        <div class="max-w-[1280px] mx-auto relative z-10">
            <div class="flex flex-col items-center text-center gap-4">
                <span class="faq-hero-badge text-sm font-semibold text-[#F5A623] uppercase tracking-[0.3em]">Support Center</span>
                <h1 class="faq-hero-title font-['Sora'] text-[40px] lg:text-[72px] font-bold leading-[48px] lg:leading-[80px] text-[#e0e3e5] max-w-4xl">
                    Pertanyaan Umum <span class="text-[#a8c8ff]">(FAQ)</span>
                </h1>
                <p class="faq-hero-desc text-[18px] leading-[28px] text-[#c5c6ce] max-w-2xl mx-auto">
                    Temukan jawaban atas segala keraguan Anda. Kami mengutamakan transparansi dan kejelasan dalam setiap langkah proses kolaborasi.
                </p>
            </div>
        </div>
        <!-- Decorative background element -->
        <div class="absolute inset-0 opacity-10 pointer-events-none overflow-hidden">
            <svg class="absolute -top-1/2 left-0 w-full h-full text-[#a8c8ff]/30" preserveAspectRatio="none" viewBox="0 0 100 100">
                <defs>
                    <pattern height="20" id="grid-faq" patternUnits="userSpaceOnUse" width="20">
                        <path d="M 20 0 L 0 0 0 20" fill="none" stroke="currentColor" stroke-width="0.2"></path>
                    </pattern>
                </defs>
                <rect fill="url(#grid-faq)" height="100" width="100"></rect>
            </svg>
        </div>
    </section>

    <!-- ===== FAQ ACCORDION SECTION ===== -->
    <section class="px-5 lg:px-16 py-24">
        <div class="max-w-[900px] mx-auto">
            <div class="flex flex-col gap-4" id="faq-accordion-main">
                
                <!-- FAQ 1 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Berapa lama rata-rata proses pengerjaan satu proyek?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Estimasi pengerjaan bervariasi tergantung skala proyek. Untuk Landing Page standar memakan waktu 5-7 hari kerja. Website korporat dengan CMS biasanya 2-3 minggu, sementara platform kustom (SaaS/Dashboard) memerlukan waktu 4-8 minggu. Kami selalu memberikan timeline detail di awal kontrak.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah biaya hosting dan domain sudah termasuk?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Biaya yang tertera adalah biaya pengembangan (development fee). Kami memberikan bantuan setup hosting dan domain secara gratis, namun biaya langganan tahunan ke provider hosting (seperti Niagahoster, Vercel, atau Google Cloud) dibayarkan langsung oleh klien atau melalui sistem penagihan terpisah untuk memastikan kepemilikan aset tetap di tangan Anda.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Bagaimana sistem pembayaran yang diberlakukan?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Kami menggunakan sistem termin standar: 50% Down Payment (DP) sebagai tanda komitmen untuk memulai riset dan desain, serta 50% pelunasan setelah proyek selesai, diuji, dan siap untuk diluncurkan (go-live). Untuk proyek skala besar, kami juga menawarkan termin berbasis milestone (pencapaian fitur).
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah website yang dibuat pasti mobile-friendly?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Tentu saja. Kami menerapkan prinsip Mobile-First Design. Mengingat lebih dari 70% trafik web berasal dari perangkat seluler, kami menjamin website Anda akan tampil sempurna, responsif, dan mudah dioperasikan baik di smartphone, tablet, maupun layar desktop resolusi tinggi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah ada dukungan teknis setelah proyek selesai (Post-Launch)?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Ya, kami memberikan garansi pemeliharaan selama 3 bulan pertama setelah peluncuran untuk perbaikan bug atau error teknis secara gratis. Kami juga menawarkan paket maintenance bulanan jika Anda membutuhkan update konten rutin, backup berkala, dan optimasi keamanan berkelanjutan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah saya bisa request revisi di tengah pengerjaan?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Tentu bisa. Kami menerapkan sistem revisi bertahap di setiap milestone. Setiap paket memiliki kuota revisi yang telah disepakati di awal. Untuk perubahan di luar scope awal, akan didiskusikan dan disesuaikan dengan timeline serta biaya tambahan jika diperlukan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah website saya akan dioptimasi untuk SEO?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Ya, kami menerapkan on-page SEO terbaik seperti struktur heading yang benar, meta tag, URL friendly, dan kecepatan loading yang optimal. Kami juga membantu setup Google Search Console dan Analytics agar Anda bisa memantau performa website secara mandiri.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 9 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apa yang terjadi jika saya tidak puas dengan hasil akhir?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Kepuasan Anda adalah prioritas kami. Kami memiliki sistem revisi bertahap di setiap milestone, sehingga Anda bisa memberikan masukan sejak awal. Jika masih ada ketidakpuasan, kami akan diskusikan bersama untuk menemukan solusi terbaik, termasuk revisi tambahan di luar kuota dengan biaya yang disepakati.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 10 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah website saya akan aman dari serangan hacker?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Tentu. Kami menerapkan praktik keamanan terbaik seperti SSL Certificate, proteksi SQL Injection, CSRF Protection, dan regular security audit. Untuk aplikasi dengan data sensitif, kami juga bisa menambahkan fitur 2FA dan enkripsi data.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 11 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Bagaimana jika saya ingin menambah fitur baru di tengah pengerjaan?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Kami sangat terbuka dengan perubahan. Namun, penambahan fitur di luar scope awal akan didiskusikan terlebih dahulu untuk menyesuaikan timeline dan biaya. Kami akan memberikan estimasi tambahan waktu dan biaya sebelum eksekusi.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 12 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah saya bisa mengelola konten website sendiri tanpa coding?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Ya! Semua website yang kami bangun dilengkapi dengan Content Management System (CMS) yang user-friendly. Anda bisa menambah, mengedit, atau menghapus konten (teks, gambar, video) tanpa perlu pengetahuan coding sama sekali.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 13 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Berapa biaya perawatan website setelah selesai?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Biaya perawatan tergantung pada kebutuhan Anda. Kami menawarkan paket maintenance bulanan mulai dari Rp 300.000 yang mencakup backup rutin, update keamanan, monitoring uptime, dan bantuan teknis darurat. Untuk perubahan konten minor, kami juga menyediakan sistem self-service melalui CMS.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 14 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Teknologi apa yang akan digunakan untuk website saya?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Kami menggunakan teknologi modern terbaik sesuai kebutuhan proyek Anda. Untuk backend menggunakan <span class="text-white font-semibold">Laravel 11</span> dengan <span class="text-white font-semibold">PHP 8.3</span>. Untuk frontend menggunakan <span class="text-white font-semibold">Next.js 15</span> atau <span class="text-white font-semibold">React</span> dengan <span class="text-white font-semibold">Tailwind CSS</span>. Untuk e-commerce, kami menggunakan <span class="text-white font-semibold">Filament v3</span> untuk admin panel. Semua menggunakan database <span class="text-white font-semibold">MySQL</span> atau <span class="text-white font-semibold">PostgreSQL</span>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ 15 -->
                <div class="faq-item bg-[#191c1e] rounded-2xl border border-[rgba(74,127,199,0.2)] overflow-hidden group transition-all duration-300 hover:border-[#a8c8ff]/50">
                    <button class="w-full p-6 lg:p-8 flex items-center justify-between gap-4 text-left transition-colors" onclick="toggleFaq(this)">
                        <span class="font-['Sora'] text-base lg:text-2xl font-semibold text-[#e0e3e5]">Apakah website yang dibuat akan support multi-language?</span>
                        <div class="w-10 h-10 rounded-full bg-[#1E2E4D] flex items-center justify-center transition-transform duration-300 group-data-[active=true]:rotate-180 group-data-[active=true]:bg-[#a8c8ff] flex-shrink-0">
                            <span class="material-symbols-outlined text-[#e0e3e5] text-lg group-data-[active=true]:text-[#0d1b35]">expand_more</span>
                        </div>
                    </button>
                    <div class="faq-content max-h-0 opacity-0 transition-all duration-300 ease-in-out overflow-hidden">
                        <div class="px-6 lg:px-8 pb-6 lg:pb-8">
                            <p class="text-[16px] text-[#c5c6ce] border-t border-[rgba(74,127,199,0.2)] pt-6 leading-relaxed">
                                Ya, kami bisa mengembangkan website dengan dukungan multi-language (Indonesia, Inggris, dll). Fitur ini tersedia di paket Business untuk layanan Company Profile dan Custom Web App. Kami menggunakan sistem translasi yang terintegrasi dengan CMS.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section class="px-5 lg:px-16 py-24">
        <div class="max-w-[1280px] mx-auto">
            <div class="relative bg-[#114784] rounded-[2rem] overflow-hidden p-8 lg:p-20 flex flex-col items-center text-center gap-6 group">
                <!-- Visual Background Overlay -->
                <div class="absolute inset-0 opacity-30 group-hover:opacity-40 transition-opacity">
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-[#F5A623] rounded-full blur-[160px] translate-y-1/2"></div>
                </div>
                <div class="relative z-10 flex flex-col gap-4 max-w-3xl">
                    <span class="text-sm font-semibold text-[#F5A623] uppercase tracking-[0.2em]">Ready to start?</span>
                    <h2 class="font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] text-[#d5e3ff]">Siap Memulai Perjalanan Digital Anda?</h2>
                    <p class="text-[18px] leading-[28px] text-[#c5c6ce] opacity-90">
                        Punya pertanyaan khusus yang belum terjawab di atas? Jangan ragu untuk mendiskusikan visi Anda langsung dengan tim ahli kami.
                    </p>
                </div>
                <div class="relative z-10 flex flex-col sm:flex-row items-center gap-4">
                    <a href="{{ route('contact') }}" 
                       class="px-10 py-5 bg-[#F5A623] text-[#0d1b35] rounded-full font-semibold text-sm hover:scale-105 transition-all shadow-2xl shadow-[#F5A623]/20">
                        Konsultasi Gratis Sekarang
                    </a>
                    <a href="{{ route('portfolio') }}" 
                       class="px-10 py-5 bg-white/10 backdrop-blur-md text-[#e0e3e5] rounded-full font-semibold text-sm hover:bg-white/20 transition-all border border-white/20">
                        Lihat Portfolio
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<script>
    function toggleFaq(button) {
        const item = button.parentElement;
        const content = item.querySelector('.faq-content');
        const isActive = item.getAttribute('data-active') === 'true';
        
        // Close all others in this accordion
        const accordion = item.parentElement;
        accordion.querySelectorAll('.faq-item').forEach(i => {
            if (i !== item) {
                i.setAttribute('data-active', 'false');
                const otherContent = i.querySelector('.faq-content');
                otherContent.style.maxHeight = '0';
                otherContent.style.opacity = '0';
            }
        });

        if (!isActive) {
            item.setAttribute('data-active', 'true');
            content.style.maxHeight = content.scrollHeight + 'px';
            content.style.opacity = '1';
        } else {
            item.setAttribute('data-active', 'false');
            content.style.maxHeight = '0';
            content.style.opacity = '0';
        }
    }

    // ===== SMOOTH ANIMATION ON SCROLL =====
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-12');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.faq-item, section > div').forEach(el => {
            el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-12', 'ease-out');
            observer.observe(el);
        });
    });
</script>

<style>
    /* ===== FAQ ANIMATION ===== */
    .faq-content {
        transition: max-height 0.4s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.3s ease;
    }
    .faq-item[data-active="true"] .faq-content {
        max-height: 500px;
        opacity: 1;
    }
    .faq-item[data-active="true"] button .flex-shrink-0 {
        background: #a8c8ff;
    }
    .faq-item[data-active="true"] button .flex-shrink-0 span {
        color: #0d1b35;
    }
</style>
@endsection