@extends('layouts.app')

@section('title', $project->title . ' - Portfolio Jasa Website Makassar | ARWebStudio')
@section('meta_description', $project->title . ' - ' . Str::limit($project->description, 140) . ' | ARWebStudio, jasa pembuatan website di Makassar.')
@section('canonical', route('portfolio.detail', $project->id))

{{-- Open Graph per portfolio --}}
@section('og_title', $project->title . ' - Portfolio ARWebStudio Makassar')
@section('og_description', Str::limit($project->description ?? 'Lihat karya terbaik ARWebStudio dalam portofolio ini.', 155))
@section('og_image', $project->formatted_thumbnail_url ?? asset('images/og-image.jpg'))
@section('twitter_title', $project->title . ' | ARWebStudio')
@section('twitter_description', Str::limit($project->description ?? 'Portfolio ARWebStudio Makassar.', 155))
@section('twitter_image', $project->formatted_thumbnail_url ?? asset('images/og-image.jpg'))

@section('content')
<div class="flex flex-col w-full bg-[#101415]">
    <!-- ===== BACK BUTTON ===== -->
    <div class="max-w-[1280px] mx-auto px-5 lg:px-16 w-full pt-8">
        <a href="{{ route('portfolio') }}" 
           class="inline-flex items-center gap-2 text-[#c5c6ce] hover:text-[#F5A623] transition-colors group">
            <span class="material-symbols-outlined text-sm group-hover:-translate-x-1 transition-transform">arrow_back</span>
            <span class="text-sm font-semibold uppercase tracking-widest">Kembali ke Portfolio</span>
        </a>
    </div>

    <!-- ===== HERO ===== -->
    <section class="relative px-5 lg:px-16 py-12 lg:py-20">
        <div class="max-w-[1280px] mx-auto">
            <div class="relative w-full aspect-[16/9] overflow-hidden rounded-xl bg-[#1d2022] border border-[rgba(74,127,199,0.2)]">
                @if($project->formatted_thumbnail_url)
                    <img src="{{ $project->formatted_thumbnail_url }}" 
                         alt="Portfolio {{ $project->title }} - ARWebStudio Makassar" 
                         fetchpriority="high"
                         class="w-full h-full object-cover">
                @else
                    <div class="w-full h-full flex items-center justify-center">
                        <span class="material-symbols-outlined text-[100px] text-[#a8c8ff]/30">image</span>
                    </div>
                @endif
                <div class="absolute bottom-6 left-6 flex gap-2 flex-wrap">
                    <span class="px-4 py-1.5 rounded-full bg-[#F5A623]/20 border border-[#F5A623]/30 text-[#F5A623] text-xs font-semibold backdrop-blur-md">
                        {{ $project->category }}
                    </span>
                    @if($project->client_name)
                        <span class="px-4 py-1.5 rounded-full bg-[#1E2E4D]/80 border border-[rgba(74,127,199,0.2)] text-[#c5c6ce] text-xs font-semibold backdrop-blur-md">
                            {{ $project->client_name }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CONTENT ===== -->
    <section class="px-5 lg:px-16 pb-24">
        <div class="max-w-[1280px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left Column -->
                <div class="lg:col-span-5 flex flex-col gap-6">
                    <div>
                        <h1 class="font-['Sora'] text-3xl lg:text-5xl font-bold text-[#e0e3e5]">{{ $project->title }}</h1>
                        <p class="text-[#c5c6ce] text-base lg:text-lg mt-4 leading-relaxed">{{ $project->description }}</p>
                    </div>
                    
                    @if($project->project_url)
                        <a href="{{ $project->project_url }}" target="_blank" 
                           class="inline-flex items-center justify-between w-full px-6 py-4 rounded-lg bg-[#F5A623] text-[#0d1b35] font-semibold hover:bg-[#F5A623]/90 transition-all">
                            <span>Visit Project Live</span>
                            <span class="material-symbols-outlined">arrow_outward</span>
                        </a>
                    @endif
                </div>

                <!-- Right Column -->
                <div class="lg:col-span-7 flex flex-col gap-8">
                    
                    <!-- ===== PROBLEM ===== -->
                    @if($project->problem)
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-px bg-gradient-to-b from-[#F5A623] to-transparent h-auto min-h-[40px] hidden sm:block"></div>
                        <div class="flex-1">
                            <h3 class="text-sm font-semibold uppercase tracking-widest text-[#F5A623]">Masalah</h3>
                            <p class="text-[#c5c6ce] text-base leading-relaxed mt-2">{{ $project->problem }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- ===== SOLUTION ===== -->
                    @if($project->solution)
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-px bg-gradient-to-b from-[#bac6e8] to-transparent h-auto min-h-[40px] hidden sm:block"></div>
                        <div class="flex-1">
                            <h3 class="text-sm font-semibold uppercase tracking-widest text-[#bac6e8]">Solusi</h3>
                            <p class="text-[#c5c6ce] text-base leading-relaxed mt-2">{{ $project->solution }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- ===== RESULT ===== -->
                    @if($project->result)
                    <div class="flex gap-4">
                        <div class="flex-shrink-0 w-px bg-gradient-to-b from-[#F5A623] to-transparent h-auto min-h-[40px] hidden sm:block"></div>
                        <div class="flex-1">
                            <h3 class="text-sm font-semibold uppercase tracking-widest text-[#F5A623]">Hasil</h3>
                            <p class="text-[#c5c6ce] text-base leading-relaxed mt-2">{{ $project->result }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA ===== -->
    <section class="px-5 lg:px-16 pb-24">
        <div class="max-w-[1280px] mx-auto bg-gradient-to-br from-[#191c1e] via-[#1d2022] to-[#272a2c] rounded-[2rem] p-8 lg:py-16 lg:px-16 flex flex-col items-center text-center gap-6 border border-white/[0.05]">
            <h2 class="font-['Sora'] text-2xl lg:text-4xl font-semibold text-[#e0e3e5]">Tertarik dengan proyek serupa?</h2>
            <p class="text-[#c5c6ce] max-w-xl">Mari kita diskusikan bagaimana kami dapat membantu Anda membangun solusi digital Anda berikutnya.</p>
            <a href="{{ whatsapp_link('Halo ARWebStudio, saya tertarik dengan project ' . $project->title . '. Saya ingin berkonsultasi lebih lanjut tentang pembuatan website serupa.') }}" 
                target="_blank" 
                class="bg-[#F5A623] text-[#0d1b35] px-10 py-4 rounded-full font-semibold hover:scale-105 transition-all">
                Hubungi Kami
            </a>
        </div>
    </section>
</div>
@endsection

@push('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CreativeWork",
    "name": "{{ addslashes($project->title) }}",
    "description": "{{ addslashes(Str::limit($project->description ?? '', 200)) }}",
    "creator": {
        "@type": "Organization",
        "name": "ARWebStudio",
        "url": "{{ url('/') }}"
    },
    "url": "{{ route('portfolio.detail', $project->id) }}"
    @if($project->formatted_thumbnail_url),
    "image": "{{ $project->formatted_thumbnail_url }}"
    @endif
}
</script>
@endpush