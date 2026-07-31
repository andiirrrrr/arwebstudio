@extends('layouts.app')

@section('title', 'Portfolio Website Makassar - ARWebStudio')
@section('meta_description', 'Lihat portfolio website dan aplikasi web yang telah kami buat untuk UMKM dan perusahaan di Makassar. Jasa pembuatan website profesional.')

@section('content')
<div class="flex flex-col w-full bg-[#101415]">
    <!-- ===== HEADER SECTION ===== -->
    <section class="relative px-5 lg:px-16 py-16 lg:py-24">
        <div class="max-w-[1280px] mx-auto flex flex-col items-center text-center gap-6">
            <div class="flex flex-col gap-2 items-center">
                <div class="flex items-center gap-2">
                    <span class="w-8 h-[2px] bg-[#F5A623]"></span>
                    <span class="portfolio-hero-badge text-sm font-semibold text-[#F5A623] uppercase tracking-[0.3em]">KEUNGGULAN DALAM EKSEKUSI</span>
                </div>
                <h1 class="portfolio-hero-title font-['Sora'] text-[40px] lg:text-[72px] font-bold leading-[48px] lg:leading-[80px] text-[#e0e3e5] mt-2">
                    Karya <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#e0e3e5] via-[#c5c6ce] to-[#a8c8ff]">Pilihan.</span>
                </h1>
                <p class="portfolio-hero-desc max-w-2xl text-[18px] leading-[28px] text-[#c5c6ce] mt-2">
                    Kumpulan proyek digital yang dikerjakan dengan presisi dan dedikasi.
                </p>
            </div>

            <!-- ===== FILTER CONTROLS ===== -->
            <div class="portfolio-filter-bar w-full max-w-3xl mx-auto mt-4">
                <div class="flex flex-wrap justify-center gap-1.5 sm:gap-2 p-2 sm:p-1.5 bg-[#1d2022] rounded-xl sm:rounded-full border border-white/[0.05]" id="filter-container">
                    <button class="filter-btn active px-3 sm:px-6 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold bg-[#114784] text-[#d5e3ff] transition-all duration-300" data-filter="all">
                        All Projects
                    </button>
                    @php
                        $categories = App\Models\Project::distinct('category')->pluck('category');
                    @endphp
                    @foreach($categories as $category)
                        <button class="filter-btn px-3 sm:px-6 py-1.5 sm:py-2 rounded-full text-xs sm:text-sm font-semibold text-[#c5c6ce] hover:text-[#e0e3e5] transition-all duration-300" data-filter="{{ strtolower($category) }}">
                            {{ $category }}
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ===== PROJECT GRID SECTION ===== -->
    <section class="px-5 lg:px-16 pb-24">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6" id="project-grid">
                @forelse($projects as $index => $project)
                    @php
                        $categorySlug = strtolower($project->category);
                    @endphp
                    <a href="{{ route('portfolio.detail', $project->id) }}" 
                       class="project-card group flex flex-col gap-3 sm:gap-4 rounded-xl p-3 sm:p-4 border border-white/[0.05] hover:border-white/[0.15] hover:bg-[#191c1e] transition-all duration-500 cursor-pointer"
                       data-category="{{ $categorySlug }}">
                        
                        <!-- Thumbnail -->
                        <div class="relative aspect-[16/10] overflow-hidden rounded-lg bg-[#272a2c]">
                            @if($project->thumbnail_url)
                                <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" 
                                     src="{{ $project->thumbnail_url }}" 
                                     alt="{{ $project->title }}">
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-[#16233d]">
                                    <span class="material-symbols-outlined text-[40px] sm:text-[60px] text-[#a8c8ff]/30">image</span>
                                </div>
                            @endif
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-[#101415]/40 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center backdrop-blur-[2px]">
                                <span class="bg-[#F5A623] text-[#0d1b35] px-4 sm:px-6 py-2 sm:py-3 rounded-full text-xs sm:text-sm font-semibold flex items-center gap-2 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                    View Details 
                                    <span class="material-symbols-outlined text-sm">arrow_outward</span>
                                </span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex flex-col gap-1 px-0.5">
                            <div class="flex items-start justify-between gap-2">
                                <h3 class="font-['Sora'] text-base sm:text-2xl font-semibold text-[#e0e3e5] leading-tight">{{ Str::limit($project->title, 20) }}</h3>
                                <span class="px-2 sm:px-3 py-0.5 sm:py-1 bg-[#1E2E4D] text-[#d5e3ff] text-[8px] sm:text-[10px] font-semibold uppercase tracking-wider rounded-full border border-[#114784]/30 flex-shrink-0">
                                    {{ Str::limit($project->category, 10) }}
                                </span>
                            </div>
                            @if($project->description)
                                <p class="text-[#c5c6ce] text-xs sm:text-[16px] leading-relaxed opacity-80">{{ Str::limit($project->description, 60) }}</p>
                            @endif
                            @if($project->client_name)
                                <p class="text-[#c5c6ce] text-[10px] sm:text-sm opacity-60">Client: {{ $project->client_name }}</p>
                            @endif
                        </div>
                    </a>
                @empty
                    <p class="text-[#c5c6ce] col-span-full text-center py-12">Belum ada project. Silakan tambahkan di admin panel.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ===== CTA SECTION ===== -->
    <section class="px-5 lg:px-16 pb-24">
        <div class="max-w-[1280px] mx-auto bg-gradient-to-br from-[#191c1e] via-[#1d2022] to-[#272a2c] rounded-2xl sm:rounded-[2rem] p-6 sm:p-8 lg:py-24 lg:px-16 flex flex-col items-center text-center gap-4 sm:gap-6 border border-white/[0.05] overflow-hidden relative group">
            <!-- Background Glow -->
            <div class="absolute top-0 right-0 w-64 sm:w-96 h-64 sm:h-96 bg-[#F5A623]/5 blur-[120px] rounded-full -mr-48 -mt-48 transition-all duration-700 group-hover:bg-[#F5A623]/10"></div>
            <div class="absolute bottom-0 left-0 w-64 sm:w-96 h-64 sm:h-96 bg-[#a8c8ff]/5 blur-[120px] rounded-full -ml-48 -mb-48 transition-all duration-700 group-hover:bg-[#a8c8ff]/10"></div>
            
            <h2 class="font-['Sora'] text-2xl sm:text-[32px] lg:text-[48px] font-semibold leading-[32px] sm:leading-[40px] lg:leading-[56px] text-[#e0e3e5] max-w-2xl relative z-10">
                Siap membangun proyek digital impian Anda?
            </h2>
            <p class="text-sm sm:text-[18px] leading-relaxed sm:leading-[28px] text-[#c5c6ce] max-w-xl relative z-10">
                Mari wujudkan visi Anda bersama keahlian teknis kami — hasil yang tak hanya bagus, tapi berkesan.
            </p>
            <a href="{{ route('contact') }}" 
               class="bg-[#F5A623] text-[#0d1b35] px-8 sm:px-12 py-3 sm:py-5 rounded-full text-sm font-semibold hover:scale-105 transition-all shadow-[0_20px_40px_-12px_rgba(245,166,35,0.3)] relative z-10">
                Mulai Proyek
            </a>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // ===== FILTER FUNCTIONALITY =====
        const filterButtons = document.querySelectorAll('.filter-btn');
        const projectCards = document.querySelectorAll('.project-card');

        // Initial reveal animation
        projectCards.forEach((card, index) => {
            setTimeout(() => {
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100 + 200);
        });

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');
                
                // Update active state
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-[#114784]', 'text-[#d5e3ff]');
                    btn.classList.add('text-[#c5c6ce]');
                });
                this.classList.add('active', 'bg-[#114784]', 'text-[#d5e3ff]');
                this.classList.remove('text-[#c5c6ce]');

                // Filter cards with smooth animation
                projectCards.forEach((card, index) => {
                    const cardCategory = card.getAttribute('data-category');
                    
                    if (filterValue === 'all' || cardCategory === filterValue) {
                        card.style.display = 'flex';
                        void card.offsetHeight;
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px) scale(0.96)';
                        
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0) scale(1)';
                        }, index * 60);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(15px) scale(0.96)';
                        
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 400);
                    }
                });
            });
        });
    });
</script>

<style>
    /* ===== BASE ===== */
    .project-card {
        transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        text-decoration: none;
        will-change: transform, opacity;
    }
    .project-card:hover {
        transform: translateY(-4px);
    }
    
    .aspect-\[16\/10\] {
        aspect-ratio: 16 / 10;
    }

    /* ===== FILTER BUTTONS ===== */
    .filter-btn {
        transition: all 0.3s ease;
        cursor: pointer;
        user-select: none;
        white-space: nowrap;
    }
    .filter-btn.active {
        background: #114784;
        color: #d5e3ff;
    }
    .filter-btn:not(.active):hover {
        color: #e0e3e5;
        background: rgba(255, 255, 255, 0.05);
    }
    
    /* ===== RESPONSIVE ===== */
    @media (max-width: 640px) {
        /* Filter buttons - 3 per baris dengan lebar 31% */
        .filter-btn {
            font-size: 10px;
            padding: 6px 8px;
            flex: 0 0 calc(33.333% - 6px);
            text-align: center;
            justify-content: center;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 0;
        }
        #filter-container {
            gap: 4px;
            padding: 8px;
            border-radius: 12px;
        }
        /* Card mobile */
        .project-card {
            padding: 12px;
        }
        .project-card h3 {
            font-size: 14px;
        }
        .project-card p {
            font-size: 12px;
        }
    }
    
    @media (min-width: 641px) and (max-width: 1024px) {
        .filter-btn {
            font-size: 12px;
            padding: 6px 16px;
        }
    }
</style>
@endsection