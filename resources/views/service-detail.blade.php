@extends('layouts.app')

@section('title', $service->name . ' - Jasa Pembuatan Website di Makassar | ARWebStudio')
@section('meta_description', 'Layanan ' . $service->name . ' dari ARWebStudio, jasa pembuatan website profesional di Makassar. ' . Str::limit($service->description, 140))

@section('content')
<div class="flex flex-col w-full overflow-hidden">
    <!-- ===== 1. HERO SECTION ===== -->
    <section class="relative w-full py-[30px]">
        <div class="max-w-[1280px] mx-auto px-5 lg:px-16 w-full py-6">
            <a href="{{ route('services') }}" 
            class="inline-flex items-center gap-2 text-[#c5c6ce] hover:text-[#F5A623] transition-colors group">
                <span class="material-symbols-outlined text-sm group-hover:-translate-x-1 transition-transform">arrow_back</span>
                <span class="text-sm font-semibold uppercase tracking-widest">Kembali ke Layanan</span>
            </a>
        </div>
        <div class="absolute top-0 right-0 pointer-events-none select-none overflow-hidden h-full w-full opacity-[0.03]">
            <h2 class="text-[240px] font-bold text-[#e0e3e5] leading-none -rotate-90 origin-top-right transform translate-y-32 translate-x-20">ARCHITECTURE</h2>
        </div>
        <div class="max-w-[1280px] mx-auto px-5 lg:px-16 grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
            <div class="lg:col-span-5 flex flex-col gap-4 relative z-10">
                <h1 class="font-['Sora'] text-[40px] lg:text-[72px] font-bold leading-[48px] lg:leading-[80px] text-[#e0e3e5]">
                    {{ $service->name }}<br/>
                </h1>
                <p class="text-[18px] leading-[28px] text-[#c5c6ce] max-w-md">
                    {{ $service->description }}
                </p>
                @if($service->target_audience)
                    <p class="text-sm text-[#c5c6ce]">
                        <span class="text-[#a8c8ff] font-semibold">Target:</span> {{ $service->target_audience }}
                    </p>
                @endif
                <div class="flex gap-4 mt-4">
                    <a href="https://wa.me/6285922107678?text={{ urlencode('Halo ARWebStudio, saya tertarik dengan layanan ' . $service->name . '. Saya ingin berkonsultasi lebih lanjut.') }}" 
                    target="_blank"
                    class="bg-[#F5A623] text-[#101415] font-semibold text-sm px-6 py-4 rounded-full hover:scale-105 transition-transform flex items-center gap-2">
                        Konsultasi Sekarang
                        <span class="material-symbols-outlined text-sm">arrow_outward</span>
                    </a>
                </div>
            </div>
            <div class="lg:col-span-7 mt-6 lg:mt-0 relative">
                <div class="aspect-[4/3] w-full overflow-hidden rounded-xl border border-[rgba(74,127,199,0.2)] shadow-2xl group">
                    @if($service->thumbnail)
                        <img src="{{ asset('storage/' . $service->thumbnail) }}" 
                             alt="{{ $service->name }}" 
                             class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700 scale-105 group-hover:scale-100">
                    @else
                        <div class="w-full h-full bg-[#1d2022] flex items-center justify-center">
                            <span class="material-symbols-outlined text-[120px] text-[#a8c8ff]/30">image</span>
                        </div>
                    @endif
                    <div class="absolute top-4 right-4 bg-[#101415]/80 backdrop-blur-md p-4 border border-[rgba(74,127,199,0.2)] rounded-lg flex flex-col gap-2">
                        <div class="flex items-center gap-2">
                            <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                            <span class="text-[10px] font-semibold text-[#e0e3e5] uppercase">Live Processing</span>
                        </div>
                        <div class="h-1 w-24 bg-[#1d2022] rounded-full overflow-hidden">
                            <div class="h-full bg-[#F5A623] w-2/3"></div>
                        </div>
                    </div>
                </div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 border-l border-b border-[#F5A623]/30 -z-10"></div>
            </div>
        </div>
    </section>

    <!-- ===== 2. PRICING PACKAGE SECTION ===== -->
    <section class="w-full py-[120px] bg-[#191c1e] border-y border-[rgba(74,127,199,0.2)]">
        <div class="max-w-[1280px] mx-auto px-5 lg:px-16">
            <div class="flex flex-col items-center text-center mb-20">
                <h2 class="font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] text-[#e0e3e5]">Paket Layanan</h2>
                <span>Pilih paket yang paling sesuai dengan kebutuhan website Anda</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse($servicePrices as $index => $price)
                    @php
                        $isPopular = $price->is_featured || $index == 1;
                        $features = [];
                        if ($price->features) {
                            $raw = is_string($price->features) ? json_decode($price->features, true) : $price->features;
                            if (is_array($raw)) {
                                $features = $raw;
                            }
                        }
                        $waNumber = '6285922107678';
                        $waMessage = 'Halo ARWebStudio, saya tertarik dengan layanan ' . $service->name . ' - Paket ' . $price->package->name . '. Saya ingin berkonsultasi lebih lanjut.';
                        $waUrl = 'https://wa.me/' . $waNumber . '?text=' . urlencode($waMessage);
                    @endphp
                    <div class="bg-[#101415] border {{ $isPopular ? 'border-[#F5A623] shadow-2xl scale-105' : 'border-[rgba(74,127,199,0.2)]' }} p-6 rounded-xl flex flex-col gap-4 hover:border-[#F5A623]/50 transition-colors relative">
                        @if($isPopular)
                            <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-[#F5A623] text-[#101415] px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest">Recommended</div>
                        @endif
                        <div class="flex justify-between items-start">
                            <h4 class="font-['Sora'] text-2xl font-medium text-[#e0e3e5]">{{ $price->package->name }}</h4>
                            <span class="material-symbols-outlined text-[#c5c6ce]">{{ $isPopular ? 'rocket_launch' : 'terminal' }}</span>
                        </div>
                        <div class="flex items-baseline gap-1">
                            <span class="text-xs text-[#c5c6ce]">Rp</span>
                            <span class="text-[30px] lg:text-[48px] font-bold text-[#e0e3e5]">{{ number_format($price->price, 0, ',', '.') }}</span>
                        </div>
                        
                        <!-- Fitur 2 Kolom -->
                        @if(count($features) > 0)
                            <div class="grid grid-cols-2 gap-1 my-2">
                                @foreach($features as $feature)
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[#F5A623] text-sm flex-shrink-0">check_circle</span>
                                        <span class="text-[12px] text-[#c5c6ce] leading-tight">
                                            {{ is_array($feature) ? ($feature['feature'] ?? reset($feature)) : $feature }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Info Tambahan -->
                        <div class="flex flex-wrap gap-3 text-xs text-[#c5c6ce] border-t border-[rgba(74,127,199,0.1)] pt-3 mt-1">
                            @if($price->page_limit)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[#F5A623] text-sm">description</span>
                                    {{ $price->page_limit }} Halaman
                                </span>
                            @else
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[#F5A623] text-sm">description</span>
                                    Unlimited Halaman
                                </span>
                            @endif
                            @if($price->estimated_days)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[#F5A623] text-sm">schedule</span>
                                    {{ $price->estimated_days }} Hari
                                </span>
                            @endif
                            @if($price->revision_limit)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[#F5A623] text-sm">autorenew</span>
                                    {{ $price->revision_limit }}x Revisi
                                </span>
                            @else
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[#F5A623] text-sm">autorenew</span>
                                    Unlimited Revisi
                                </span>
                            @endif
                            @if($price->hosting)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[#F5A623] text-sm">cloud</span>
                                    Hosting
                                </span>
                            @endif
                            @if($price->domain)
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[#F5A623] text-sm">language</span>
                                    Domain
                                </span>
                            @endif
                        </div>

                        <a href="{{ $waUrl }}" 
                        target="_blank"
                        class="w-full py-3 {{ $isPopular ? 'bg-[#F5A623] text-[#101415]' : 'border border-[#F5A623] text-[#F5A623]' }} font-semibold text-sm rounded-lg hover:{{ $isPopular ? 'brightness-110' : 'bg-[#F5A623] text-[#101415]' }} transition-all text-center">
                            {{ $service->name === 'Custom Web App' ? 'Konsultasi' : 'Pilih Paket' }}
                        </a>
                    </div>
                @empty
                    <p class="text-[#c5c6ce] col-span-full text-center py-12">Belum ada paket harga. Silakan cek kembali nanti.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- ===== 3. HOW WE BUILD SECTION ===== -->
    @if($service->workflow)
    @php
        $workflow = is_string($service->workflow) ? json_decode($service->workflow, true) : $service->workflow;
        if (!is_array($workflow)) $workflow = [];
    @endphp
    @if(count($workflow) > 0)
    <section class="w-full py-[120px] bg-[#1d2022] overflow-hidden">
        <div class="max-w-[1280px] mx-auto px-5 lg:px-16">
            <div class="flex flex-col items-center text-center mb-20">
                <h2 class="font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] text-[#e0e3e5]">Proses Kerja Kami</h2>
            </div>
            
            <!-- ===== MOBILE VERSION ===== -->
            <div class="lg:hidden relative">
                <!-- Vertical Line -->
                <div class="absolute left-8 top-0 bottom-0 w-[2px] bg-[rgba(74,127,199,0.15)]"></div>
                
                @foreach($workflow as $index => $step)
                    @php
                        $status = ['COMPLETE', 'STABLE', 'SYNCING', 'PENDING'];
                        $statusColor = ['text-green-500', 'text-green-500 animate-pulse', 'text-blue-400', 'text-[#c5c6ce]'];
                        $icon = ['search', 'architecture', 'code', 'rocket_launch'];
                        $iconIndex = $index % 4;
                        $stepNumber = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                        $isLast = $index === count($workflow) - 1;
                    @endphp
                    
                    <div class="workflow-step relative pl-20 pb-16 last:pb-0">
                        <!-- Dot connector -->
                        <div class="absolute left-[28px] top-1.5 w-4 h-4 rounded-full border-2 border-[#F5A623] bg-[#1d2022] z-10 
                                    {{ $isLast ? 'bg-[#F5A623] border-[#F5A623]' : '' }}">
                            @if($isLast)
                                <div class="absolute inset-0 rounded-full bg-[#F5A623] animate-ping opacity-40"></div>
                            @endif
                        </div>
                        
                        <!-- Step Content -->
                        <div class="bg-[#191c1e]/60 backdrop-blur-sm rounded-xl p-5 border border-[rgba(74,127,199,0.08)] hover:border-[#F5A623]/20 transition-all duration-300">
                            <div class="flex items-center gap-3 mb-3">
                                <span class="text-[10px] font-semibold bg-[#F5A623]/10 text-[#F5A623] px-3 py-1 rounded-full">
                                    {{ $stepNumber }}
                                </span>
                                <span class="text-[10px] font-semibold {{ $statusColor[$iconIndex] }} uppercase">
                                    [{{ $status[$iconIndex] }}]
                                </span>
                            </div>
                            <h4 class="font-['Sora'] text-lg font-medium text-[#e0e3e5]">
                                {{ is_array($step) ? ($step['step'] ?? reset($step)) : $step }}
                            </h4>
                            @if($isLast)
                                <div class="mt-3 flex items-center gap-2">
                                    <span class="text-[10px] text-[#F5A623] font-mono uppercase tracking-wider">Ready to launch</span>
                                    <span class="material-symbols-outlined text-[#F5A623] text-base">rocket_launch</span>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- ===== DESKTOP VERSION ===== -->
            <div class="hidden lg:block relative">
                <div class="absolute top-1/2 left-0 w-full h-[2px] bg-[rgba(74,127,199,0.15)] -z-0"></div>
                
                <div class="flex flex-row justify-between items-start">
                    @foreach($workflow as $index => $step)
                        @php
                            $status = ['COMPLETE', 'STABLE', 'SYNCING', 'PENDING'];
                            $statusColor = ['text-green-500', 'text-green-500 animate-pulse', 'text-blue-400', 'text-[#c5c6ce]'];
                            $icon = ['search', 'architecture', 'code', 'rocket_launch'];
                            $iconIndex = $index % 4;
                            $stepNumber = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
                            $isLast = $index === count($workflow) - 1;
                        @endphp
                        
                        <div class="workflow-step relative z-10 w-1/4 group px-4 {{ $index % 2 == 1 ? 'mt-24' : '' }}">
                            <!-- Step Number Circle -->
                            <div class="w-16 h-16 bg-[#363a3b] rounded-full border-4 border-[#101415] flex items-center justify-center mb-4 group-hover:border-[#F5A623] transition-colors relative {{ $isLast ? 'bg-[#F5A623] border-[#F5A623]' : '' }}">
                                <span class="material-symbols-outlined {{ $isLast ? 'text-[#101415]' : 'text-[#e0e3e5]' }} text-3xl">
                                    {{ $isLast ? 'rocket_launch' : $icon[$iconIndex] }}
                                </span>
                                
                                <!-- Pulse Ring -->
                                @if($isLast)
                                    <div class="absolute inset-0 rounded-full border-2 border-[#F5A623] opacity-50 animate-ping"></div>
                                @endif
                            </div>
                            
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <span class="text-[10px] font-semibold bg-[#F5A623]/10 text-[#F5A623] px-2 py-0.5 rounded">{{ $stepNumber }}</span>
                                    <span class="text-xs font-semibold {{ $statusColor[$iconIndex] }} uppercase">{{ $status[$iconIndex] }}</span>
                                </div>
                                <h4 class="font-['Sora'] text-xl font-medium text-[#e0e3e5]">
                                    {{ is_array($step) ? ($step['step'] ?? reset($step)) : $step }}
                                </h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    @endif

    <!-- ===== 4. RELATED PROJECTS SECTION ===== -->
    <section class="w-full py-[120px] bg-[#101415]">
        <div class="max-w-[1280px] mx-auto px-5 lg:px-16">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between mb-20 gap-4">
                <div class="flex flex-col">
                    <h2 class="font-['Sora'] text-[32px] lg:text-[48px] font-semibold leading-[40px] lg:leading-[56px] text-[#e0e3e5]">Proyek Terkait</h2>
                </div>
                <a href="{{ route('portfolio') }}" class="flex items-center gap-2 text-[#F5A623] font-semibold text-sm hover:translate-x-1 transition-transform">
                    Lihat Semua Portfolio <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($relatedProjects as $project)
                    <a href="{{ route('portfolio.detail', $project->id) }}" class="group cursor-pointer">
                        <div class="aspect-[4/3] overflow-hidden rounded-xl border border-[rgba(74,127,199,0.2)] mb-4">
                            @if($project->formatted_thumbnail_url)
                                <img src="{{ $project->formatted_thumbnail_url }}" 
                                    alt="{{ $project->title }}" 
                                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-105">
                            @else
                                <div class="w-full h-full bg-[#1d2022] flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[60px] text-[#a8c8ff]/30">image</span>
                                </div>
                            @endif
                        </div>
                        <h4 class="font-['Sora'] text-2xl font-medium text-[#e0e3e5] group-hover:text-[#F5A623] transition-colors">{{ $project->title }}</h4>
                        <p class="text-[#c5c6ce] text-[16px]">{{ $project->client_name ?? $project->category ?? 'ARWebStudio' }}</p>
                    </a>
                @empty
                    <p class="text-[#c5c6ce] col-span-full text-center py-12">Belum ada project terkait.</p>
                @endforelse
            </div>
        </div>
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

        document.querySelectorAll('section > div, section h1, section h2').forEach((el) => {
            if (!el.classList.contains('absolute') && !el.classList.contains('fixed')) {
                el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-1000', 'ease-out');
                observer.observe(el);
            }
        });
    });
</script>

@endsection