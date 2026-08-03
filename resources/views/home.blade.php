@extends('layouts.app')

@section('title', 'Jasa Pembuatan Website di Makassar - ARWebStudio')
@section('meta_description', 'ARWebStudio adalah jasa pembuatan website profesional di Makassar. Kami melayani landing page, company profile, e-commerce, dan custom web app untuk UMKM dan perusahaan di Makassar dan sekitarnya.')

@section('content')
    <!-- ===== BACKGROUND OVERSIZED TYPOGRAPHY ===== -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden select-none z-0">
        <div class="absolute top-40 left-10 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Solutions</div>
        <div class="absolute top-[1200px] right-10 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Solutions</div>
        <div class="absolute top-[2400px] left-1/2 -translate-x-1/2 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Quality</div>
    </div>

    <!-- ===== HERO ===== -->
    <section class="relative px-5 lg:px-16 py-[120px] overflow-hidden">
        <div class="max-w-[1280px] mx-auto flex flex-col lg:flex-row items-center gap-6 relative z-10">
            <div class="w-full lg:w-1/2 flex flex-col gap-8">
                <div class="flex flex-col gap-4">
                    <span class="hero-badge text-sm font-semibold text-[#F5A623] uppercase tracking-[0.2em]">
                        Jasa Website Profesional
                    </span>
                    <h1 class="hero-title font-['Sora'] text-[40px] lg:text-[72px] font-bold leading-[48px] lg:leading-[80px] tracking-[-0.02em] text-[#e0e3e5]">
                        Transformasi <span class="text-[#a8c8ff]">Digital</span><br/>
                        <span class="text-[#a8c8ff]">UMKM & Bisnis</span>
                    </h1>
                    <p class="hero-desc text-[18px] leading-[28px] text-[#c5c6ce] max-w-xl">
                        Kami membantu bisnis Anda tumbuh lebih cepat melalui solusi web kustom, desain UI/UX yang memikat, dan strategi teknologi yang tepat sasaran.
                    </p>
                </div>
                <div class="hero-buttons flex flex-wrap gap-4">
                    <a href="/kontak" class="bg-[#F5A623] text-[#0d1b35] px-10 py-4 rounded-full font-semibold text-sm hover:scale-105 transition-all shadow-xl shadow-[#F5A623]/10">
                        Mulai Proyek
                    </a>
                    <a href="/portofolio" class="border border-[rgba(74,127,199,0.2)] text-[#e0e3e5] px-10 py-4 rounded-full font-semibold text-sm hover:bg-[#1E2E4D] transition-all">
                        Lihat Portfolio
                    </a>
                </div>
            </div>
            <div class="hero-image w-full lg:w-1/2 relative group">
                <div class="absolute -inset-4 bg-[#114784]/20 blur-3xl rounded-full group-hover:bg-[#114784]/30 transition-all duration-700"></div>
                <div class="relative aspect-square w-full max-w-[500px] mx-auto overflow-hidden rounded-2xl bg-[#1d2022] shadow-2xl border border-[rgba(74,127,199,0.2)]">
                    <img class="w-full h-full object-cover" src="{{ asset('images/image.png') }}" alt="Hero ARWebStudio">
                    <div class="hero-card absolute bottom-6 left-6 right-6 p-4 bg-[#101415]/80 backdrop-blur-md rounded-xl border border-[rgba(74,127,199,0.2)]">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-[#F5A623]/20 flex items-center justify-center">
                                <span class="material-symbols-outlined text-[#F5A623]">rocket_launch</span>
                            </div>
                            <div>
                                <p class="text-sm font-semibold text-[#e0e3e5]">Konsultasi Gratis Sebelum Mulai</p>
                                <p class="text-xs text-[#c5c6ce]">Pastikan solusi sesuai kebutuhan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LAYANAN PREVIEW ===== -->
    <section class="services-section px-5 lg:px-16 py-[120px] bg-[#0b0f10]">
        <div class="max-w-[1280px] mx-auto">
            <!-- Header Section -->
            <div class="flex flex-col items-center text-center gap-4 mb-16">
                <span class="services-badge text-sm font-semibold text-[#F5A623] uppercase tracking-[0.2em]">
                    Layanan Kami
                </span>
                <h2 class="services-title font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] tracking-[-0.01em] text-[#e0e3e5]">
                    Solusi Digital untuk <br class="hidden sm:block">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#e0e3e5] via-[#d8e2ff] to-[#a8c8ff]">Bisnis Anda</span>
                </h2>
                <p class="services-subtitle text-[16px] text-[#c5c6ce] max-w-2xl">
                    Kami menyediakan layanan pengembangan website dan aplikasi web yang dirancang khusus untuk membantu bisnis Anda tumbuh di era digital.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($services as $service)
                    <div class="service-card group relative bg-[#191c1e] rounded-2xl overflow-hidden border border-[rgba(74,127,199,0.15)] hover:border-[#F5A623]/50 transition-all duration-500 hover:shadow-2xl hover:shadow-[#F5A623]/5 hover:-translate-y-2">
                        <!-- Thumbnail -->
                        <div class="relative h-48 overflow-hidden bg-[#16233d]">
                            @if($service->thumbnail)
                                <img src="{{ asset('storage/' . $service->thumbnail) }}" 
                                    alt="{{ $service->name }}" 
                                    loading="lazy"
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

            <!-- View All Button -->
            <div class="text-center mt-12">
                <a href="{{ route('services') }}" 
                class="inline-flex items-center gap-2 border border-[rgba(74,127,199,0.3)] text-[#e0e3e5] px-8 py-3 rounded-full font-medium text-sm hover:bg-[#1E2E4D] hover:border-[#F5A623]/50 transition-all duration-300 group">
                    Lihat Semua Layanan
                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== PORTOFOLIO PREVIEW ===== -->
    <section class="portfolio-section px-5 lg:px-16 py-[120px]">
        <div class="max-w-[1280px] mx-auto">
            <!-- Header -->
            <div class="flex justify-between items-end mb-16 gap-8">
                <div class="flex flex-col gap-4">
                    <span class="portfolio-badge text-sm font-semibold text-[#F5A623] uppercase tracking-[0.2em]">Karya Kami</span>
                    <h2 class="portfolio-title font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] tracking-[-0.01em] text-[#e0e3e5]">
                        Portfolio <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#e0e3e5] via-[#d8e2ff] to-[#a8c8ff]">Terpilih</span>
                    </h2>
                </div>
            </div>

            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($projects as $project)
                    <a href="{{ route('portfolio.detail', $project->id) }}" 
                    class="portfolio-card group relative overflow-hidden rounded-2xl bg-[#191c1e] border border-[rgba(74,127,199,0.15)] hover:border-[#F5A623]/50 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-[#F5A623]/5">
                        <div class="aspect-[4/3] w-full overflow-hidden bg-[#16233d]">
                            @if($project->formatted_thumbnail_url)
                                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" 
                                    src="{{ $project->formatted_thumbnail_url }}" 
                                    alt="{{ $project->title }}"
                                    loading="lazy">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-[#a8c8ff]">
                                    <span class="material-symbols-outlined text-6xl opacity-30">image</span>
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-semibold text-[#F5A623] uppercase tracking-widest">{{ $project->category }}</span>
                            <h4 class="font-['Sora'] text-xl font-semibold text-[#e0e3e5] mt-2 group-hover:text-[#F5A623] transition-colors">{{ $project->title }}</h4>
                            @if($project->client_name)
                                <p class="text-[#c5c6ce] text-sm mt-1">Klien: {{ $project->client_name }}</p>
                            @endif
                        </div>
                    </a>
                @empty
                    <p class="text-[#c5c6ce] col-span-full text-center py-12">Belum ada project. Silakan tambahkan di admin panel.</p>
                @endforelse
            </div>
            <!-- View All Button -->
            <div class="text-center mt-12">
                <a href="{{ route('portfolio') }}" 
                class="inline-flex items-center gap-2 border border-[rgba(74,127,199,0.3)] text-[#e0e3e5] px-8 py-3 rounded-full font-medium text-sm hover:bg-[#1E2E4D] hover:border-[#F5A623]/50 transition-all duration-300 group">
                    Lihat Semua Proyek
                    <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ===== TESTIMONI ===== -->
    @if($testimonials->count())
    <section class="testimoni-section px-5 lg:px-16 py-[120px] bg-[#191c1e]">
        <div class="max-w-[1280px] mx-auto overflow-hidden">
            <div class="flex flex-col gap-4 mb-16 text-center">
                <span class="text-sm font-semibold text-[#a8c8ff] uppercase tracking-widest">Testimoni</span>
                <h2 class="font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] tracking-[-0.01em] text-[#e0e3e5]">
                    Apa Kata Klien Kami
                </h2>
            </div>
            <div class="flex gap-6 overflow-x-auto pb-8 scrollbar-hide snap-x snap-mandatory">
                @foreach($testimonials as $testi)
                    <div class="testimoni-card min-w-[300px] md:min-w-[400px] snap-center p-6 bg-[#272a2c] rounded-xl border border-[rgba(74,127,199,0.2)] flex flex-col gap-6 hover:border-[#a8c8ff]/40 transition-all duration-300">
                        <div class="flex gap-1 text-[#F5A623]">
                            @for($i = 0; $i < ($testi->rating ?? 5); $i++)
                                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            @endfor
                        </div>
                        <p class="text-[16px] leading-[24px] text-[#e0e3e5] italic">"{{ $testi->quote }}"</p>
                        <div class="flex items-center gap-4 pt-4 border-t border-[rgba(74,127,199,0.2)]">
                            @if($testi->photo_url)
                                <img src="{{ $testi->photo_url }}" alt="{{ $testi->client_name }}" class="w-12 h-12 rounded-full object-cover">
                            @else
                                <div class="w-12 h-12 rounded-full bg-[#a8c8ff]/20 flex items-center justify-center font-bold text-[#a8c8ff]">
                                    {{ substr($testi->client_name, 0, 2) }}
                                </div>
                            @endif
                            <div>
                                <p class="text-sm font-semibold text-[#e0e3e5]">{{ $testi->client_name }}</p>
                                <p class="text-xs text-[#c5c6ce]">{{ $testi->business_name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- ===== CTA AKHIR ===== -->
    <section class="cta-section px-5 lg:px-16 py-[120px]">
        <div class="max-w-[1000px] mx-auto text-center py-20 px-8 bg-[#1E2E4D] rounded-3xl border border-[rgba(74,127,199,0.2)] relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-br from-[#F5A623]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
            <div class="relative z-10 flex flex-col items-center gap-6">
                <div class="flex flex-col gap-4">
                    <h2 class="font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] text-[#e0e3e5]">
                        Siap Memulai Perjalanan Digital Anda?
                    </h2>
                    <p class="text-[18px] leading-[28px] text-[#c5c6ce] max-w-2xl mx-auto">
                        Konsultasikan kebutuhan website Anda secara gratis dengan tim ahli kami. Kami siap mewujudkan ide brilian Anda menjadi kenyataan.
                    </p>
                </div>
                <a href="https://wa.me/6285922107678" target="_blank" class="flex items-center gap-4 bg-[#F5A623] text-[#0d1b35] px-12 py-5 rounded-full font-['Sora'] text-sm font-semibold hover:scale-105 active:scale-95 transition-all shadow-2xl shadow-[#F5A623]/20">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    Hubungi via WhatsApp
                </a>
                <p class="text-xs text-[#c5c6ce]">Rata-rata balasan dalam waktu &lt; 30 menit</p>
            </div>
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-[#a8c8ff]/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-[#F5A623]/10 rounded-full blur-3xl pointer-events-none"></div>
        </div>
    </section>
@endsection