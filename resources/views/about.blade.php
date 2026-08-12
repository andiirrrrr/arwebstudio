@extends('layouts.app')

@section('title', 'Tentang ARWebStudio - Jasa Pembuatan Website di Makassar')
@section('meta_description', 'ARWebStudio adalah jasa pembuatan website yang didirikan tahun 2026 di Makassar. Full Stack Developer dengan bantuan AI untuk solusi digital terbaik bagi UMKM Makassar.')
@section('canonical', route('about'))

{{-- Open Graph --}}
@section('og_title', 'Tentang ARWebStudio - Tim Jasa Website Profesional Makassar')
@section('og_description', 'ARWebStudio didirikan di Makassar tahun 2026. Kami adalah Full Stack Developer yang membantu UMKM & bisnis tumbuh melalui solusi website profesional.')

@section('content')
<div class="flex flex-col w-full bg-[#101415]">

    <!-- ===== HERO SECTION ===== -->
    <section class="relative px-5 lg:px-16 py-24 lg:py-32 min-h-[80vh] flex items-center overflow-hidden bg-[#101415]">
        <!-- Background Pattern -->
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.05) 1px, transparent 0); background-size: 40px 40px;"></div>
        
        <div class="max-w-[1280px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 items-center relative z-10">
            <!-- Left Column -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <h1 class="about-hero-title font-['Sora'] text-[40px] lg:text-[84px] leading-[1] text-[#e0e3e5] max-w-2xl">
                    <span class="font-['Sora'] font-light italic block mb-2 opacity-80">Membangun</span>
                    <span class="font-bold">Masa Depan Digital</span>
                </h1>
                <div class="about-hero-desc space-y-4 text-[16px] lg:text-[18px] leading-relaxed text-[#c5c6ce] max-w-xl">
                    <p>
                        <span class="text-[#F5A623] font-semibold">ARWebStudio</span> didirikan pada tahun 2026 menjembatani kesenjangan antara bisnis dan teknologi digital. Sebagai studio <span class="text-[#a8c8ff] font-semibold">Pengembang Web</span>, kami percaya setiap bisnis berhak memiliki kehadiran digital yang profesional, cepat, dan efektif.
                    </p>
                    <p>
                        Dengan memanfaatkan kekuatan <span class="text-[#F5A623] font-semibold">Artificial Intelligence</span> dalam proses development, ARWebStudio menghadirkan solusi yang lebih cerdas, lebih cepat, dan lebih terjangkau — mulai dari analisis kebutuhan, optimasi kode, hingga prediksi performa aplikasi.
                    </p>
                    <p>
                        Komitmen kami adalah membantu UMKM dan Pebisnis seluruh Indonesia bertransformasi secara digital dengan solusi yang tepat guna dan berkelanjutan.
                    </p>
                </div>
                <div class="about-hero-tags flex flex-wrap gap-3 mt-2">
                    <span class="px-4 py-2 bg-[#F5A623]/10 border border-[#F5A623]/20 rounded-full text-[#F5A623] text-sm font-semibold">AI-Powered Development</span>
                    <span class="px-4 py-2 bg-[#a8c8ff]/10 border border-[#a8c8ff]/20 rounded-full text-[#a8c8ff] text-sm font-semibold">Full Stack Expert</span>
                    <span class="px-4 py-2 bg-[#114784]/30 border border-[#114784]/20 rounded-full text-[#a8c8ff] text-sm font-semibold">Makassar, Indonesia</span>
                </div>
            </div>

            <!-- Right Column - Image -->
            <div class="lg:col-span-5 relative mt-12 lg:mt-0">
                <div class="about-hero-image relative aspect-[3/4] rounded-2xl overflow-hidden shadow-[0_40px_100px_-20px_rgba(0,0,0,0.6)] border border-white/5 transform lg:translate-x-12">
                    <img alt="Logo ARWebStudio - Jasa Website Makassar" class="w-full h-full object-cover" src="{{ asset('images/logo.jpeg') }}">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#101415] via-transparent to-transparent opacity-40"></div>
                </div>
                <!-- Floating Badge -->
                <div class="about-floating-badge float-badge absolute -bottom-8 -left-8 bg-[#1d2022]/60 backdrop-blur-sm p-6 rounded-xl hidden lg:block max-w-[240px] border border-white/10">
                    <p class="text-[#F5A623] font-bold text-4xl mb-1">Inovatif</p>
                    <p class="text-[#c5c6ce] text-sm">Solusi berbasis AI untuk kebutuhan bisnis modern.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== VISI & MISI ===== -->
    <section class="px-5 lg:px-16 py-24 bg-[#0b0f10]">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-stretch">
                <!-- Visi -->
                <div class="visi-card flex flex-col gap-6 p-12 border border-white/5 rounded-[40px] bg-gradient-to-b from-white/[0.02] to-transparent">
                    <div class="relative w-24 h-24 mb-4">
                        <div class="absolute inset-0 bg-[#F5A623]/20 rounded-full blur-xl"></div>
                        <div class="relative w-full h-full border-2 border-[#F5A623] rounded-full flex items-center justify-center text-[#F5A623] font-['Sora'] text-4xl font-bold">01</div>
                    </div>
                    <h2 class="font-['Sora'] text-[30px] lg:text-[48px] font-semibold leading-[38px] lg:leading-[56px] text-[#e0e3e5]">Visi Strategis</h2>
                    <p class="text-[18px] leading-[28px] text-[#c5c6ce]">
                        Menjadi mitra teknologi terpercaya bagi UMKM dan perusahaan di Indonesia dengan memanfaatkan kekuatan AI dan Full Stack development untuk menciptakan solusi digital yang inovatif, cepat, dan terjangkau.
                    </p>
                </div>

                <!-- Misi -->
                <div class="misi-card flex flex-col gap-6 p-12 border border-white/5 rounded-[40px] bg-gradient-to-b from-white/[0.02] to-transparent lg:mt-24">
                    <div class="relative w-24 h-24 mb-4">
                        <div class="absolute inset-0 bg-[#a8c8ff]/20 rounded-full blur-xl"></div>
                        <div class="relative w-full h-full border-2 border-[#a8c8ff] rounded-full flex items-center justify-center text-[#a8c8ff] font-['Sora'] text-4xl font-bold">02</div>
                    </div>
                    <h2 class="font-['Sora'] text-[30px] lg:text-[48px] font-semibold leading-[38px] lg:leading-[56px] text-[#e0e3e5]">Misi Eksekusi</h2>
                    <p class="text-[18px] leading-[28px] text-[#c5c6ce]">
                        Memberikan keunggulan kompetitif bagi klien kami melalui integrasi AI dalam proses development, keamanan berlapis, dan desain yang mengutamakan kepuasan pengguna akhir dengan efisiensi waktu dan biaya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CORE VALUES ===== -->
    <section class="px-5 lg:px-16 py-24">
        <div class="max-w-[1280px] mx-auto">
            <div class="flex flex-col lg:flex-row justify-between items-end gap-6 mb-20">
                <div class="max-w-2xl">
                    <h2 class="about-values-title font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] text-[#e0e3e5]">Nilai-nilai yang Memandu Setiap Baris Kode.</h2>
                </div>
                <div class="h-[1px] flex-grow bg-white/10 mb-6 hidden lg:block mx-12"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">
                <!-- Value 1: Large -->
                <div class="about-value-card md:col-span-8 bg-[#1d2022]/60 backdrop-blur-sm p-12 rounded-[32px] border border-white/10 hover:border-[#F5A623]/50 transition-all duration-500 overflow-hidden relative group">
                    <div class="absolute -right-12 -top-12 w-64 h-64 bg-[#F5A623]/5 rounded-full blur-3xl group-hover:bg-[#F5A623]/10 transition-colors"></div>
                    <div class="flex flex-col h-full gap-6 relative z-10">
                        <div class="w-14 h-14 rounded-xl bg-[#F5A623]/10 flex items-center justify-center border border-[#F5A623]/20">
                            <span class="material-symbols-outlined text-3xl text-[#F5A623]" style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
                        </div>
                        <h3 class="font-['Sora'] text-[30px] font-semibold text-[#e0e3e5]">AI-First Development</h3>
                        <p class="text-[18px] leading-[28px] text-[#c5c6ce] max-w-xl">
                            Kami memanfaatkan kecerdasan buatan untuk mempercepat pengembangan, meningkatkan kualitas kode, dan memberikan solusi yang lebih cerdas bagi klien kami. AI bukan hanya alat, tapi mitra dalam setiap proyek.
                        </p>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="about-value-card md:col-span-4 bg-[#1d2022]/60 backdrop-blur-sm p-10 rounded-[32px] border border-white/10 flex flex-col gap-4 hover:bg-[#272a2c] transition-all">
                    <div class="w-14 h-14 rounded-xl bg-[#a8c8ff]/10 flex items-center justify-center border border-[#a8c8ff]/20">
                        <span class="material-symbols-outlined text-3xl text-[#a8c8ff]" style="font-variation-settings: 'FILL' 1;">code</span>
                    </div>
                    <h3 class="font-['Sora'] text-2xl font-semibold text-[#e0e3e5]">Full Stack Excellence</h3>
                    <p class="text-[16px] text-[#c5c6ce]">
                        Dari frontend yang memukau hingga backend yang kokoh, kami menguasai seluruh lapisan teknologi untuk menghadirkan solusi yang utuh dan terintegrasi.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="about-value-card md:col-span-4 bg-[#1d2022]/60 backdrop-blur-sm p-10 rounded-[32px] border border-white/10 flex flex-col gap-4 hover:bg-[#272a2c] transition-all">
                    <div class="w-14 h-14 rounded-xl bg-[#a8c8ff]/10 flex items-center justify-center border border-[#a8c8ff]/20">
                        <span class="material-symbols-outlined text-3xl text-[#a8c8ff]" style="font-variation-settings: 'FILL' 1;">hub</span>
                    </div>
                    <h3 class="font-['Sora'] text-2xl font-semibold text-[#e0e3e5]">Transparent Partnership</h3>
                    <p class="text-[16px] text-[#c5c6ce]">
                        Kepercayaan adalah fondasi kolaborasi. Kami beroperasi dengan transparansi penuh dalam proses, biaya, dan hasil yang kami capai.
                    </p>
                </div>

                <!-- Value 4 -->
                <div class="about-value-card md:col-span-8 bg-[#1d2022]/60 backdrop-blur-sm p-10 rounded-[32px] border border-white/10 bg-gradient-to-r from-[#114784]/20 to-transparent">
                    <div class="flex items-center gap-12">
                        <div class="hidden sm:block">
                            <span class="material-symbols-outlined text-6xl text-white/10" style="font-variation-settings: 'FILL' 1;">rocket_launch</span>
                        </div>
                        <div>
                            <h3 class="font-['Sora'] text-2xl font-semibold text-[#e0e3e5] mb-2">Sustainable Digital Growth</h3>
                            <p class="text-[16px] text-[#c5c6ce]">
                                Fokus kami adalah dampak jangka panjang. Website Anda harus berkembang seiring dengan pertumbuhan bisnis Anda tanpa hambatan teknis, dengan bantuan AI untuk optimasi berkelanjutan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== TECH STACK ===== -->
    <section class="relative px-5 lg:px-16 py-24 bg-[#0b0f10] overflow-hidden">
        <!-- Background Decor -->
        <div class="absolute top-0 left-0 w-full h-full opacity-20" style="background-size: 40px 40px; background-image: linear-gradient(to right, rgba(255,255,255,0.02) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.02) 1px, transparent 1px);"></div>
        <div class="absolute -right-20 top-20 font-['Sora'] text-[220px] font-bold text-white/[0.02] leading-none select-none">STACK</div>
        <div class="absolute -left-20 bottom-20 font-['Sora'] text-[220px] font-bold text-white/[0.02] leading-none select-none transform -rotate-90">ENGINE</div>

        <div class="max-w-[1280px] mx-auto relative z-10">
            <div class="flex flex-col gap-4 mb-20">
                <h2 class="font-['Sora'] text-[32px] lg:text-[64px] font-semibold leading-[40px] lg:leading-[72px] text-[#e0e3e5] max-w-3xl">Teknologi yang Kami Gunakan.</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                <!-- Side Label -->
                <div class="hidden lg:flex lg:col-span-1 flex-col items-center pt-8">
                    <div class="w-[1px] h-32 bg-gradient-to-b from-[#F5A623]/50 to-transparent mb-4"></div>
                    <span class="[writing-mode:vertical-lr] rotate-180 text-xs text-[#c5c6ce]/40 tracking-widest uppercase">Precision Engineering</span>
                </div>

                <!-- Content -->
                <div class="lg:col-span-11 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-12">
                    <!-- Backend -->
                    <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-r from-[#F5A623]/20 to-transparent rounded-[24px] blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                        <div class="relative bg-[#1d2022]/60 backdrop-blur-sm border border-white/5 rounded-[24px] p-8 lg:p-12 h-full flex flex-col gap-10">
                            <div class="flex justify-between items-start">
                                <span class="font-mono text-[10px] text-[#F5A623]/60 tracking-tighter">SERVER-SIDE</span>
                                <span class="material-symbols-outlined text-[#F5A623] opacity-40">hub</span>
                            </div>
                            <div>
                                <h3 class="font-['Sora'] text-[30px] font-semibold text-[#e0e3e5]">Backend &amp; Admin</h3>
                                <p class="text-[#c5c6ce] text-[16px] max-w-sm mt-2">Arsitektur server yang kokoh dan panel admin yang intuitif menggunakan standar Laravel terbaru.</p>
                            </div>
                            <div class="mt-auto pt-8 border-t border-white/5 grid grid-cols-2 gap-4">
                                <div>
                                    <span class="text-[10px] text-[#c5c6ce]/50 uppercase tracking-widest">Framework</span>
                                    <div class="flex items-center gap-2 mt-1">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/laravel/laravel-original.svg" class="w-6 h-6" alt="Laravel">
                                        <span class="text-[#e0e3e5] font-semibold text-sm">Laravel 11</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[10px] text-[#c5c6ce]/50 uppercase tracking-widest">Database</span>
                                    <div class="flex items-center gap-2 mt-1">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original.svg" class="w-6 h-6" alt="MySQL">
                                        <span class="text-[#e0e3e5] font-semibold text-sm">MySQL / PostgreSQL</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded bg-[#F5A623]/10 border border-[#F5A623]/20 text-[11px] font-bold text-[#F5A623] uppercase flex items-center gap-1.5">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" class="w-3 h-3" alt="PHP"> PHP 8.3
                                </span>
                                <span class="px-3 py-1 rounded bg-[#a8c8ff]/10 border border-[#a8c8ff]/20 text-[11px] font-bold text-[#a8c8ff] uppercase flex items-center gap-1.5">
                                    <img src="https://filamentphp.com/favicon.svg"class="w-3 h-3" alt="Filament"> Filament v3
                                </span>
                                <span class="px-3 py-1 rounded bg-white/5 border border-white/10 text-[11px] font-bold text-[#c5c6ce] uppercase flex items-center gap-1.5">
                                    <img src="https://www.svgrepo.com/show/303460/redis-logo.svg" class="w-3 h-3" alt="Redis"> Redis
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Frontend -->
                    <div class="relative group lg:mt-24">
                        <div class="absolute -inset-1 bg-gradient-to-r from-[#a8c8ff]/20 to-transparent rounded-[24px] blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
                        <div class="relative bg-[#1d2022]/60 backdrop-blur-sm border border-white/5 rounded-[24px] p-8 lg:p-12 h-full flex flex-col gap-10">
                            <div class="flex justify-between items-start">
                                <span class="font-mono text-[10px] text-[#F5A623]/60 tracking-tighter">CLIENT-SIDE</span>
                                <span class="material-symbols-outlined text-[#F5A623] opacity-40">hub</span>
                            </div>
                            <div>
                                <h3 class="font-['Sora'] text-[30px] font-semibold text-[#e0e3e5]">Frontend &amp; UI</h3>
                                <p class="text-[#c5c6ce] text-[16px] max-w-sm mt-2">Antarmuka modern dengan performa tinggi, dioptimalkan untuk Core Web Vitals dan SEO.</p>
                            </div>
                            <div class="mt-auto pt-8 border-t border-white/5 grid grid-cols-2 gap-4">
                                <div>
                                    <span class="text-[10px] text-[#c5c6ce]/50 uppercase tracking-widest">Framework</span>
                                    <div class="flex items-center gap-2 mt-1">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nextjs/nextjs-original.svg" class="w-6 h-6" alt="Next.js">
                                        <span class="text-[#e0e3e5] font-semibold text-sm">Next.js 15</span>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-[10px] text-[#c5c6ce]/50 uppercase tracking-widest">Styling</span>
                                    <div class="flex items-center gap-2 mt-1">
                                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" class="w-6 h-6" alt="Tailwind CSS">
                                        <span class="text-[#e0e3e5] font-semibold text-sm">Tailwind CSS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 rounded bg-[#a8c8ff]/10 border border-[#a8c8ff]/20 text-[11px] font-bold text-[#a8c8ff] uppercase flex items-center gap-1.5">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg" class="w-3 h-3" alt="TypeScript"> TypeScript
                                </span>
                                <span class="px-3 py-1 rounded bg-[#F5A623]/10 border border-[#F5A623]/20 text-[11px] font-bold text-[#F5A623] uppercase flex items-center gap-1.5">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/alpinejs/alpinejs-original.svg" class="w-3 h-3" alt="Alpine.js"> Alpine.js
                                </span>
                                <span class="px-3 py-1 rounded bg-white/5 border border-white/10 text-[11px] font-bold text-[#c5c6ce] uppercase flex items-center gap-1.5">
                                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg" class="w-3 h-3" alt="React"> React
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- AI & Infrastructure -->
                    <div class="md:col-span-2 relative group mt-8">
                        <div class="absolute -inset-1 bg-gradient-to-r from-[#F5A623]/10 to-[#a8c8ff]/10 rounded-[24px] blur opacity-20 transition duration-1000"></div>
                        <div class="relative bg-[#1d2022]/60 backdrop-blur-sm border border-white/10 rounded-[24px] p-8 lg:p-16 flex flex-col lg:flex-row gap-12 items-center bg-gradient-to-br from-white/[0.03] to-transparent overflow-hidden">
                            <div class="flex-shrink-0 w-full lg:w-1/3 relative flex justify-center items-center">
                                <div class="w-48 h-48 border border-white/10 rounded-full flex items-center justify-center animate-[spin_20s_linear_infinite]">
                                    <div class="w-4 h-4 bg-[#F5A623] rounded-full absolute -top-2"></div>
                                    <div class="w-32 h-32 border border-white/10 rounded-full flex items-center justify-center animate-[spin_10s_linear_infinite_reverse]">
                                        <div class="w-3 h-3 bg-[#a8c8ff] rounded-full absolute -right-1.5"></div>
                                    </div>
                                </div>
                                <span class="absolute material-symbols-outlined text-4xl text-[#e0e3e5] opacity-50">auto_awesome</span>
                            </div>
                            <div class="flex-grow flex flex-col gap-8">
                                <div>
                                    <h3 class="font-['Sora'] text-[30px] font-semibold text-[#e0e3e5]">AI-Powered Development</h3>
                                    <p class="text-[#c5c6ce] text-[16px] max-w-2xl mt-2">Kami mengintegrasikan kecerdasan buatan dalam setiap tahap development untuk menghasilkan kode yang lebih bersih, efisien, dan solusi yang lebih cerdas.</p>
                                </div>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    <div class="p-4 border border-white/5 rounded-xl bg-white/[0.02]">
                                        <div class="flex justify-between items-start">
                                            <span class="text-[10px] text-[#c5c6ce]/60 uppercase">AI Tools</span>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1">
                                            <img src="https://cdn.simpleicons.org/claude/D97757" class="w-5 h-5" alt="Claude">
                                            <span class="text-[#e0e3e5] font-bold text-sm">Claude</span>
                                        </div>
                                    </div>
                                    <div class="p-4 border border-white/5 rounded-xl bg-white/[0.02]">
                                        <div class="flex justify-between items-start">
                                            <span class="text-[10px] text-[#c5c6ce]/60 uppercase">Cloud</span>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1">
                                            <img src="https://vercel.com/favicon.ico" class="w-5 h-5" alt="AWS">
                                            <span class="text-[#e0e3e5] font-bold text-sm">Vercel</span>
                                        </div>
                                    </div>
                                    <div class="p-4 border border-white/5 rounded-xl bg-white/[0.02]">
                                        <div class="flex justify-between items-start">
                                            <span class="text-[10px] text-[#c5c6ce]/60 uppercase">Version Control</span>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1">
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" class="w-5 h-5" alt="Git">
                                            <span class="text-[#e0e3e5] font-bold text-sm">Git / GitHub</span>
                                        </div>
                                    </div>
                                    <div class="p-4 border border-white/5 rounded-xl bg-white/[0.02]">
                                        <div class="flex justify-between items-start">
                                            <span class="text-[10px] text-[#c5c6ce]/60 uppercase">Monitoring</span>
                                        </div>
                                        <div class="flex items-center gap-2 mt-1">
                                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/sentry/sentry-original.svg" class="w-5 h-5" alt="Sentry">
                                            <span class="text-[#e0e3e5] font-bold text-sm">Sentry / Logs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ===== CTA SECTION ===== -->
    <section class="px-5 lg:px-16 py-24">
        <div class="max-w-[1280px] mx-auto relative group">
            <div class="absolute inset-0 bg-gradient-to-br from-[#114784] to-[#1E2E4D] rounded-[60px] opacity-100"></div>
            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10 rounded-[60px]"></div>
            <div class="relative z-10 p-12 lg:p-32 text-center flex flex-col items-center gap-6">
                <h2 class="font-['Sora'] text-[40px] lg:text-[72px] font-semibold leading-[48px] lg:leading-[80px] text-[#e0e3e5] mb-4">Mulai Perjalanan Anda.</h2>
                <p class="text-[18px] leading-[28px] text-[#c5c6ce] max-w-2xl">
                    Mari ciptakan platform yang tidak hanya mengesankan, tapi juga menghasilkan hasil yang terukur bagi bisnis Anda.
                </p>
                <div class="mt-8">
                    <a href="{{ route('contact') }}" 
                       class="bg-white text-[#101415] px-14 py-5 rounded-full font-bold text-lg hover:scale-105 transition-transform shadow-[0_20px_50px_rgba(255,255,255,0.1)] active:scale-95 inline-block">
                        Konsultasi Gratis Sekarang
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

<style>
    /* ===== ANIMATIONS ===== */
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
    .animate-spin-slow {
        animation: spin 20s linear infinite;
        will-change: transform;
    }
    .animate-spin-slower {
        animation: spin 10s linear infinite reverse;
        will-change: transform;
    }
    
    /* ===== GLASS CARD ===== */
    .glass-card {
        background: rgba(29, 32, 34, 0.6);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
</style>
@endsection