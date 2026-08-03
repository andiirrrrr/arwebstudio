@extends('layouts.app')

@section('title', 'Layanan Pembuatan Website di Makassar - ARWebStudio')
@section('meta_description', 'Layanan pembuatan website profesional di Makassar: Landing Page, Company Profile, E-commerce, dan Custom Web App. Konsultasi gratis untuk UMKM di Makassar!')

@section('content')
<div class="flex flex-col w-full relative bg-[#101415]">
    <!-- ===== BACKGROUND OVERSIZED TYPOGRAPHY ===== -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden select-none z-0">
        <div class="absolute top-40 left-10 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Precision</div>
        <div class="absolute top-[1200px] right-10 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Solutions</div>
        <div class="absolute top-[2400px] left-1/2 -translate-x-1/2 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Quality</div>
    </div>

    <!-- ===== HERO ===== -->
    <section class="relative px-5 lg:px-16 pt-24 pb-20 overflow-hidden z-10">
        <div class="max-w-[1280px] mx-auto relative flex flex-col items-start lg:flex-row lg:items-end justify-between gap-12">
            <div class="relative">
                <h1 class="gsap-reveal font-['Sora'] text-[48px] lg:text-[84px] leading-[0.95] tracking-tighter text-[#e0e3e5] max-w-4xl">
                    Arsitektur Digital<br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#e0e3e5] via-[#d8e2ff] to-[#7e8aaa]">Tanpa Batas.</span>
                </h1>
            </div>
            <div class="flex flex-col items-start lg:items-end gap-4 max-w-sm">
                <p class="quote-text text-[16px] text-[#c5c6ce] text-left lg:text-right leading-relaxed italic border-l-2 lg:border-l-0 lg:border-r-2 border-[#F5A623]/30 pl-4 lg:pl-0 lg:pr-4">
                    "Membangun bukan sekadar merangkai kode, melainkan merancang masa depan bisnis dalam ekosistem digital yang dinamis."
                </p>
                <span class="text-[10px] text-[#c5c6ce]/40 font-mono uppercase tracking-widest ">
                    — Makassar, Indonesia
                </span>
            </div>
        </div>
        <div class="max-w-[1280px] mx-auto h-px w-full bg-gradient-to-r from-transparent via-[rgba(74,127,199,0.15)] to-transparent mt-12"></div>
    </section>

    <!-- ===== SERVICE GRID ===== -->
    <section class="px-5 lg:px-16 pb-[120px] relative z-10">
        <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($services as $service)
                    <div class="service-card group relative bg-[#191c1e] rounded-2xl overflow-hidden border border-[rgba(74,127,199,0.15)] hover:border-[#F5A623]/50 transition-all duration-500 hover:shadow-2xl hover:shadow-[#F5A623]/5 hover:-translate-y-2">
                        <!-- Thumbnail -->
                        <div class="relative h-48 overflow-hidden bg-[#16233d]">
                            @if($service->thumbnail)
                                <img src="{{ asset('storage/' . $service->thumbnail) }}" 
                                    alt="{{ $service->name }}" 
                                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-[#a8c8ff]">
                                    <span class="material-symbols-outlined text-6xl opacity-30">
                                        @if($service->name === 'Landing Page') rocket_launch
                                        @elseif($service->name === 'Company Profile') business
                                        @elseif($service->name === 'Portfolio Website') folder
                                        @elseif($service->name === 'E-commerce') shopping_cart
                                        @elseif($service->name === 'Custom Web App') settings_ethernet
                                        @else code
                                        @endif
                                    </span>
                                </div>
                            @endif
                            <!-- Overlay gradient -->
                            <div class="absolute inset-0 bg-gradient-to-t from-[#191c1e] via-transparent to-transparent opacity-60"></div>
                            <!-- Badge -->
                            <div class="absolute top-4 right-4">
                                <span class="bg-[#F5A623]/20 text-[#F5A623] text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm border border-[#F5A623]/30">
                                    {{ $service->category ?? 'Layanan' }}
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6 flex flex-col">
                            <h3 class="font-['Sora'] text-xl font-semibold text-[#e0e3e5] mb-2 group-hover:text-[#F5A623] transition-colors">
                                {{ $service->name }}
                            </h3>
                            <p class="text-[#c5c6ce] text-sm leading-relaxed line-clamp-2 flex-1">
                                {{ $service->description }}
                            </p>
                            
                            <!-- Price & Button -->
                            <div class="mt-4 pt-4 border-t border-[rgba(74,127,199,0.1)] flex items-center justify-between">
                                <div>
                                    <span class="text-xs text-[#c5c6ce] uppercase tracking-wider">Mulai dari</span>
                                    <p class="text-[#F5A623] font-semibold text-sm">
                                        {{ $service->formatted_starting_price ?? 'Hubungi Kami' }}
                                    </p>
                                </div>
                                <a href="{{ route('service.detail', $service->id) }}" 
                                class="bg-[#114784] text-[#d5e3ff] px-4 py-2 rounded-lg text-sm font-medium hover:bg-[#F5A623] hover:text-[#0d1b35] transition-all duration-300 flex items-center gap-1 group-hover:shadow-lg">
                                    Detail
                                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-[#c5c6ce] col-span-full text-center py-12">Belum ada layanan. Silakan tambahkan di admin panel.</p>
                @endforelse
            </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="px-5 lg:px-16 py-[120px] relative overflow-hidden bg-[#0b0f10]">
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(rgba(186, 198, 232, 0.05) 1px, transparent 1px); background-size: 32px 32px;"></div>
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[rgba(74,127,199,0.15)] to-transparent"></div>
        <div class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-[rgba(74,127,199,0.15)] to-transparent"></div>
        
        <div class="max-w-[1280px] mx-auto text-center relative z-10">
            <div class="max-w-4xl mx-auto flex flex-col items-center gap-6">
                <h2 class="font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] text-[#e0e3e5]">
                    Mulai Membangun Infrastruktur Digital Anda Hari Ini.
                </h2>
                <p class="text-[18px] leading-[28px] text-[#c5c6ce] max-w-2xl">
                    Diskusikan kebutuhan spesifik Anda dengan tim kami. Kami siap mentransformasi visi Anda menjadi arsitektur web yang tangguh dan berkelas.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="{{ route('contact') }}" 
                       class="glow-pulse bg-[#F5A623] text-[#0d1b35] px-10 py-5 rounded-full text-sm font-semibold hover:scale-105 hover:bg-white hover:text-[#0d1b35] transition-all duration-300 shadow-lg shadow-[#F5A623]/20">
                        Mulai Proyek Sekarang
                    </a>
                    <a href="{{ route('portfolio') }}" 
                       class="bg-transparent border border-white/10 backdrop-blur-md text-[#e0e3e5] px-10 py-5 rounded-full text-sm font-semibold hover:border-[#F5A623] transition-all duration-300">
                        Lihat Portfolio Kami
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Circular Decor -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1200px] h-[1200px] border border-white/[0.03] rounded-full pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-white/[0.03] rounded-full pointer-events-none animate-pulse"></div>
    </section>
</div>

<style>
    .dot-pattern {
        background-image: radial-gradient(rgba(186, 198, 232, 0.05) 1px, transparent 1px);
        background-size: 32px 32px;
    }
    .aspect-\[4\/3\] {
        aspect-ratio: 4 / 3;
    }
    .hero-gradient-text {
        background: linear-gradient(180deg, #e0e3e5 0%, #7e8aaa 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .glass-card {
        background: rgba(25, 28, 30, 0.4);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(74, 127, 199, 0.1);
    }
    .thumbnail-container {
        will-change: transform;
        transform-style: preserve-3d;
    }
    .glow-pulse {
        animation: glowPulse 3s ease-in-out infinite;
    }
    @keyframes glowPulse {
        0%, 100% { box-shadow: 0 0 20px rgba(245, 166, 35, 0.15); }
        50% { box-shadow: 0 0 40px rgba(245, 166, 35, 0.30), 0 0 80px rgba(245, 166, 35, 0.10); }
    }
</style>
@endsection