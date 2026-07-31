@extends('layouts.app')

@section('title', 'Layanan Kami - ARWebStudio')

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
                <div class="flex items-center gap-4 mb-4">
                    <span class="w-12 h-px bg-[#F5A623]"></span>
                    <span class="font-mono text-xs text-[#F5A623] uppercase tracking-[0.4em]">Daftar Layanan</span>
                </div>
                <h1 class="gsap-reveal font-['Sora'] text-[48px] lg:text-[84px] leading-[0.95] tracking-tighter text-[#e0e3e5] max-w-4xl">
                    Arsitektur Digital<br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#e0e3e5] via-[#d8e2ff] to-[#7e8aaa]">Tanpa Batas.</span>
                </h1>
            </div>
            <div class="flex flex-col items-start lg:items-end gap-4 max-w-sm">
    <p class="quote-text text-[16px] text-[#c5c6ce] text-left lg:text-right leading-relaxed italic border-l-2 lg:border-l-0 lg:border-r-2 border-[#F5A623]/30 pl-4 lg:pl-0 lg:pr-4">
        "Membangun bukan sekadar merangkai kode, melainkan merancang masa depan bisnis dalam ekosistem digital yang dinamis."
    </p>
</div>
        </div>
        <div class="max-w-[1280px] mx-auto h-px w-full bg-gradient-to-r from-transparent via-[rgba(74,127,199,0.15)] to-transparent mt-12"></div>
    </section>

    <!-- ===== ASYMMETRICAL SERVICE GRID ===== -->
    <section class="px-5 lg:px-16 pb-[120px] relative z-10">
        <div class="max-w-[1280px] mx-auto space-y-32">
            @forelse($services as $index => $service)
                @php
                    $iconMap = [
                        'Landing Page' => 'rocket_launch',
                        'Company Profile' => 'business',
                        'Portfolio Website' => 'folder',
                        'E-commerce' => 'shopping_cart',
                        'Custom Web App' => 'settings_ethernet',
                    ];
                    $icon = $iconMap[$service->name] ?? 'code';
                    $number = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                    $isEven = $index % 2 == 0;
                    
                    $features = [];
                    if ($service->key_features) {
                        $raw = is_string($service->key_features) ? json_decode($service->key_features, true) : $service->key_features;
                        if (is_array($raw)) {
                            $features = array_slice($raw, 0, 3);
                        }
                    }
                    
                    $serviceType = [
                        'Landing Page' => 'Layanan',
                        'Company Profile' => 'Layanan',
                        'Portfolio Website' => 'Layanan',
                        'E-commerce' => 'Layanan',
                        'Custom Web App' => 'Layanan',
                    ];
                    $type = $serviceType[$service->name] ?? 'Layanan';
                @endphp

                <!-- Service Card -->
                <div class="stagger-card grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 items-center">
                    
                    <!-- Content -->
                    <div class="{{ $isEven ? 'lg:col-span-5 order-2 lg:order-1' : 'lg:col-span-5 order-2 lg:order-2' }}">
                        <div class="glass-card bg-[#191c1e]/40 backdrop-blur-sm rounded-2xl p-8 lg:p-12 relative overflow-hidden border border-[rgba(74,127,199,0.1)] hover:border-[#F5A623]/30 transition-colors duration-500">
                            <span class="font-mono text-xs text-[#F5A623] mb-4 block">{{ sprintf('%02d', $index + 1) }} / {{ $type }}</span>
                            <h2 class="font-['Sora'] text-[30px] lg:text-[48px] font-semibold leading-[38px] lg:leading-[56px] text-[#e0e3e5] mb-4">
                                {{ $service->name }}
                            </h2>
                            <p class="text-[18px] leading-[28px] text-[#c5c6ce] mb-10 leading-relaxed">
                                {{ $service->description }}
                            </p>
                            
                            <!-- Features -->
                            @if(count($features) > 0)
                                <ul class="space-y-4 mb-12">
                                    @foreach($features as $feature)
                                        <li class="flex items-center gap-4">
                                            <span class="material-symbols-outlined text-[#F5A623] text-sm">terminal</span>
                                            <span class="text-sm font-semibold text-[#e0e3e5] uppercase tracking-wider">
                                                {{ is_array($feature) ? ($feature['feature'] ?? reset($feature)) : $feature }}
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <!-- Price & Button -->
                            <div class="flex items-center justify-between pt-8 border-t border-white/5">
                                <div class="flex flex-col">
                                    <span class="text-xs text-[#c5c6ce]/60 font-mono">Start From</span>
                                    <span class="text-2xl font-semibold text-[#e0e3e5]">
                                        {{ $service->formatted_starting_price ?? 'Hubungi Kami' }}
                                    </span>
                                </div>
                                <a href="{{ route('service.detail', $service->id) }}" 
                                   class="px-8 py-3 rounded-xl border border-[#F5A623]/30 text-[#F5A623] text-sm font-semibold hover:bg-[#F5A623] hover:text-[#0d1b35] transition-all duration-300">
                                    Detail
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Thumbnail -->
                    <div class="{{ $isEven ? 'lg:col-span-7 order-1 lg:order-2' : 'lg:col-span-7 order-1 lg:order-1' }}">
                        <div class="relative group thumbnail-container">
                            <div class="absolute -inset-4 border border-white/5 rounded-2xl pointer-events-none group-hover:border-[#F5A623]/20 transition-colors duration-500"></div>
                            <div class="aspect-[4/3] w-full rounded-xl overflow-hidden bg-[#1d2022] shadow-2xl relative">
                                @if($service->thumbnail)
                                    <img src="{{ asset('storage/' . $service->thumbnail) }}" 
                                         alt="{{ $service->name }}" 
                                         class="w-full h-full object-cover grayscale-[0.5] group-hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-[#16233d]">
                                        <span class="material-symbols-outlined text-[120px] text-[#a8c8ff]/30">
                                            {{ $icon }}
                                        </span>
                                    </div>
                                @endif
                                
                                <!-- Overlay untuk efek glow -->
                                <div class="thumbnail-overlay absolute inset-0 pointer-events-none transition-all duration-300"></div>
                                
                                <!-- Gradient Overlay -->
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0b0f10]/80 to-transparent"></div>
                                
                                <!-- Coordinate Markings -->
                                <div class="absolute top-10 left-0 w-full h-px bg-white/10"></div>
                                <div class="absolute top-0 left-10 w-px h-full bg-white/10"></div>
                                <div class="absolute bottom-4 left-4 font-mono text-[9px] text-white/40 uppercase">
                                    Spec: 1280px / Flex Grid
                                </div>
                                
                                <!-- Status Indicator -->
                                @if($isEven)
                                    <div class="absolute top-4 right-4 flex gap-2">
                                        <div class="w-2 h-2 rounded-full bg-[#F5A623] animate-pulse"></div>
                                        <div class="w-2 h-2 rounded-full bg-white/20"></div>
                                    </div>
                                @endif
                                
                                <!-- Hover Badge -->
                                <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                                    <a href="{{ route('service.detail', $service->id) }}" class="inline-block">
                                        <span class="text-[10px] font-mono text-[#F5A623] bg-[#0b0f10]/80 px-3 py-1 rounded border border-[#F5A623]/30">
                                            EXPLORE →
                                        </span>
                                    </a>
                                </div>
                            </div>
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
                <span class="font-mono text-xs text-[#F5A623] uppercase tracking-[0.3em] flex items-center gap-3">
                    <span class="w-2 h-2 rounded-full bg-[#F5A623]"></span>
                    READY TO INITIATE?
                </span>
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

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                }
            });
        }, observerOptions);

        const scrollElements = document.querySelectorAll('.glass-card, section h1, section h2, .aspect-\\[4\\/3\\]');
        scrollElements.forEach((el) => {
            el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-1000', 'ease-out');
            observer.observe(el);
        });
    });
</script>

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
    .stagger-card {
        opacity: 0;
    }
    .gsap-reveal {
        opacity: 0;
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