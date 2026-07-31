@extends('layouts.app')

@section('title', 'Blog - ARWebStudio')
@section('meta_description', 'Artikel dan tips seputar pembuatan website, digital marketing, dan teknologi dari ARWebStudio.')

@section('content')
<div class="flex flex-col w-full bg-[#101415]">

    <!-- ===== HERO ===== -->
    <section class="relative px-5 lg:px-16 py-20 lg:py-28 overflow-hidden">
        <div class="max-w-[1280px] mx-auto">
            <div class="flex flex-col items-center text-center gap-4">
                <span class="text-sm font-semibold text-[#F5A623] uppercase tracking-[0.3em]">Blog</span>
                <h1 class="font-['Sora'] text-[40px] lg:text-[64px] font-bold leading-[48px] lg:leading-[72px] text-[#e0e3e5]">
                    Artikel & <span class="text-[#a8c8ff]">Tips</span>
                </h1>
                <p class="text-[18px] leading-[28px] text-[#c5c6ce] max-w-2xl">
                    Dapatkan informasi dan tips seputar pembuatan website, digital marketing, dan teknologi terbaru.
                </p>
            </div>
        </div>
    </section>

    <!-- ===== ARTICLES GRID ===== -->
    <section class="px-5 lg:px-16 pb-24">
        <div class="max-w-[1280px] mx-auto">
            @if($articles->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($articles as $article)
                        <a href="{{ route('blog.show', $article->slug) }}" 
                           class="group bg-[#191c1e] rounded-2xl overflow-hidden border border-[rgba(74,127,199,0.1)] hover:border-[#F5A623]/30 transition-all duration-300 hover:-translate-y-2 hover:shadow-xl hover:shadow-[#F5A623]/5">
                            
                            <!-- Thumbnail -->
                            <div class="relative aspect-[16/9] overflow-hidden bg-[#1d2022]">
                                @if($article->thumbnail)
                                    <img src="{{ asset('storage/' . $article->thumbnail) }}" 
                                         alt="{{ $article->title }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-[#a8c8ff]/30">
                                        <span class="material-symbols-outlined text-6xl">article</span>
                                    </div>
                                @endif
                                @if($article->category)
                                    <span class="absolute top-4 left-4 bg-[#F5A623]/20 text-[#F5A623] text-xs font-semibold px-3 py-1 rounded-full border border-[#F5A623]/30">
                                        {{ $article->category }}
                                    </span>
                                @endif
                            </div>

                            <!-- Content -->
                            <div class="p-6">
                                <div class="flex items-center gap-3 text-xs text-[#c5c6ce] mb-3">
                                    <span>{{ $article->formatted_date }}</span>
                                    <span>•</span>
                                    <span>{{ $article->reading_time }}</span>
                                </div>
                                <h3 class="font-['Sora'] text-xl font-semibold text-[#e0e3e5] group-hover:text-[#F5A623] transition-colors line-clamp-2">
                                    {{ $article->title }}
                                </h3>
                                <p class="text-[#c5c6ce] text-sm mt-2 line-clamp-2">
                                    {{ $article->excerpt }}
                                </p>
                                <div class="mt-4 flex items-center gap-2 text-[#F5A623] text-sm font-semibold group-hover:translate-x-1 transition-transform">
                                    Baca Selengkapnya
                                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-12">
                    {{ $articles->links() }}
                </div>
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