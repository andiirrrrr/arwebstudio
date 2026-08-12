@extends('layouts.app')

@section('title', 'Blog Jasa Website Makassar - Tips Digital & Teknologi | ARWebStudio')
@section('meta_description', 'Baca tips dan artikel seputar jasa website, digital marketing, dan teknologi terbaru dari ARWebStudio Makassar.')
@section('canonical', route('blog'))

{{-- Open Graph --}}
@section('og_title', 'Blog ARWebStudio - Tips Website & Digital Marketing Makassar')
@section('og_description', 'Artikel dan tips seputar pembuatan website, digital marketing, dan teknologi dari ARWebStudio Makassar.')

@section('content')
    <!-- ===== BACKGROUND OVERSIZED TYPOGRAPHY (Lazy-loaded) ===== -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden select-none z-0" x-data="{ loaded: false }" x-init="setTimeout(() => { loaded = true }, 100)">
        <template x-if="loaded">
            <div class="absolute top-40 left-10 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Article</div>
            <div class="absolute top-[1200px] right-10 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Solutions</div>
            <div class="absolute top-[2400px] left-1/2 -translate-x-1/2 text-[180px] lg:text-[320px] font-bold text-white/[0.02] leading-none uppercase tracking-tighter">Quality</div>
        </template>
    </div>
<div class="flex flex-col w-full bg-[#101415]">

    <!-- ===== HERO ===== -->
    <section class="relative px-5 lg:px-16 py-16 lg:py-24 overflow-hidden">
        <div class="max-w-[1280px] mx-auto">
            <div class="flex flex-col items-center text-center gap-4">
                <h1 class="font-['Sora'] text-[32px] lg:text-[56px] font-bold leading-[40px] lg:leading-[64px] text-[#e0e3e5]">
                    Artikel & <span class="text-[#a8c8ff]">Tips</span>
                </h1>
                <p class="text-[16px] lg:text-[18px] leading-relaxed text-[#c5c6ce] max-w-2xl">
                    Dapatkan informasi dan tips seputar pembuatan website, digital marketing, dan teknologi terbaru.
                </p>
                <!-- Total Artikel -->
                <span class="text-xs text-[#c5c6ce]/60 font-mono">
                    {{ $articles->total() }} Artikel
                </span>
            </div>
        </div>
    </section>

    <!-- ===== ARTICLES GRID ===== -->
    <section class="px-5 lg:px-16 pb-24">
        <div class="max-w-[1280px] mx-auto">
            @if($articles->count() > 0)
                <!-- Grid Responsif: 1 → 2 → 3 kolom -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                    @foreach($articles as $article)
                        <a href="{{ route('blog.show', $article->slug) }}" 
                           class="group bg-[#191c1e] rounded-xl sm:rounded-2xl overflow-hidden border border-[rgba(74,127,199,0.08)] hover:border-[#F5A623]/30 transition-all duration-300 hover:-translate-y-1 sm:hover:-translate-y-2 hover:shadow-xl hover:shadow-[#F5A623]/5">
                            
                            <!-- Thumbnail -->
                            <div class="relative aspect-[16/9] overflow-hidden bg-[#1d2022]">
                                @if($article->thumbnail)
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" 
                                         alt="{{ $article->title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-[#a8c8ff]/30">
                                        <span class="material-symbols-outlined text-5xl sm:text-6xl">article</span>
                                    </div>
                                @endif
                                @if($article->category)
                                    <span class="absolute top-3 left-3 bg-[#F5A623]/20 text-[#F5A623] text-[10px] sm:text-xs font-semibold px-2 sm:px-3 py-0.5 sm:py-1 rounded-full border border-[#F5A623]/30">
                                        {{ $article->category }}
                                    </span>
                                @endif
                            </div>

                            <!-- Content - Compact di mobile -->
                            <div class="p-4 sm:p-6">
                                <div class="flex items-center gap-2 text-[10px] sm:text-xs text-[#c5c6ce] mb-2 sm:mb-3">
                                    <span>{{ $article->formatted_date }}</span>
                                    <span>•</span>
                                    <span>{{ $article->reading_time }}</span>
                                </div>
                                <h3 class="font-['Sora'] text-sm sm:text-xl font-semibold text-[#e0e3e5] group-hover:text-[#F5A623] transition-colors line-clamp-2">
                                    {{ $article->title }}
                                </h3>
                                <p class="text-[#c5c6ce] text-xs sm:text-sm mt-1 sm:mt-2 line-clamp-2 sm:line-clamp-3">
                                    {{ $article->excerpt }}
                                </p>
                                <div class="mt-3 sm:mt-4 flex items-center gap-1 text-[#F5A623] text-xs sm:text-sm font-semibold group-hover:translate-x-1 transition-transform">
                                    Baca Selengkapnya
                                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- ===== PAGINATION ===== -->
                {{ $articles->links('vendor.pagination.custom') }}

            @else
                <div class="text-center py-20">
                    <span class="material-symbols-outlined text-6xl text-[#c5c6ce]/30">article</span>
                    <p class="text-[#c5c6ce] text-lg mt-4">Belum ada artikel. Silakan tambahkan di admin panel.</p>
                </div>
            @endif
        </div>
    </section>
</div>

@endsection