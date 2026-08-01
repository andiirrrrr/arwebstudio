@if ($paginator->hasPages())
    <div class="flex flex-col items-center gap-3 sm:gap-4 mt-8 sm:mt-10">
        <!-- Info -->
        <div class="text-[11px] sm:text-xs text-[#c5c6ce]/50 font-mono text-center">
            Menampilkan <span class="text-[#e0e3e5] font-semibold">{{ $paginator->firstItem() }}</span> - 
            <span class="text-[#e0e3e5] font-semibold">{{ $paginator->lastItem() }}</span> dari 
            <span class="text-[#e0e3e5] font-semibold">{{ $paginator->total() }}</span> artikel
        </div>

        <!-- Pagination Bar -->
        <div class="flex items-center justify-center gap-1 sm:gap-1.5 max-w-full">
            {{-- Previous Button --}}
            @if ($paginator->onFirstPage())
                <span class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-[#c5c6ce]/30 bg-[#1d2022] border border-[rgba(74,127,199,0.05)] text-xs sm:text-sm cursor-not-allowed select-none flex items-center justify-center">
                    <span class="material-symbols-outlined text-sm sm:text-base">chevron_left</span>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" 
                   class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-[#c5c6ce] bg-[#1d2022] border border-[rgba(74,127,199,0.1)] hover:border-[#F5A623]/50 hover:text-[#F5A623] transition-all text-xs sm:text-sm flex items-center justify-center">
                    <span class="material-symbols-outlined text-sm sm:text-base">chevron_left</span>
                </a>
            @endif

            @php
                $currentPage = $paginator->currentPage();
                $lastPage = $paginator->lastPage();
                
                $pages = [];
                $showStartPage = false;
                $showEndPage = false;
                
                if ($lastPage <= 4) {
                    for ($i = 1; $i <= $lastPage; $i++) {
                        $pages[] = $i;
                    }
                } else {
                    if ($currentPage >= $lastPage - 2) {
                        $showStartPage = true;
                        $pages = [$lastPage - 2, $lastPage - 1, $lastPage];
                    } else {
                        $showEndPage = true;
                        $pages = [$currentPage, $currentPage + 1, $currentPage + 2];
                    }
                }
            @endphp

            {{-- First Page (jika berada di akhir pagination) --}}
            @if ($showStartPage)
                <a href="{{ $paginator->url(1) }}" 
                   class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-[#c5c6ce] bg-[#1d2022] border border-[rgba(74,127,199,0.1)] hover:border-[#F5A623]/50 hover:text-[#F5A623] transition-all text-xs sm:text-sm">
                    1
                </a>
                <span class="px-1 text-[#c5c6ce]/40 text-xs sm:text-sm select-none">...</span>
            @endif

            {{-- 3 Angka Halaman Utama --}}
            @foreach ($pages as $p)
                @if ($p == $currentPage)
                    <span class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg bg-[#F5A623] text-[#0d1b35] font-bold border border-[#F5A623] shadow-md shadow-[#F5A623]/20 text-xs sm:text-sm select-none">
                        {{ $p }}
                    </span>
                @else
                    <a href="{{ $paginator->url($p) }}" 
                       class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-[#c5c6ce] bg-[#1d2022] border border-[rgba(74,127,199,0.1)] hover:border-[#F5A623]/50 hover:text-[#F5A623] transition-all text-xs sm:text-sm">
                        {{ $p }}
                    </a>
                @endif
            @endforeach

            {{-- Last Page (jika belum mendekati akhir pagination) --}}
            @if ($showEndPage)
                <span class="px-1 text-[#c5c6ce]/40 text-xs sm:text-sm select-none">...</span>
                <a href="{{ $paginator->url($lastPage) }}" 
                   class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-[#c5c6ce] bg-[#1d2022] border border-[rgba(74,127,199,0.1)] hover:border-[#F5A623]/50 hover:text-[#F5A623] transition-all text-xs sm:text-sm">
                    {{ $lastPage }}
                </a>
            @endif

            {{-- Next Button --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" 
                   class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-[#c5c6ce] bg-[#1d2022] border border-[rgba(74,127,199,0.1)] hover:border-[#F5A623]/50 hover:text-[#F5A623] transition-all text-xs sm:text-sm flex items-center justify-center">
                    <span class="material-symbols-outlined text-sm sm:text-base">chevron_right</span>
                </a>
            @else
                <span class="px-2.5 sm:px-3.5 py-1.5 sm:py-2 rounded-lg text-[#c5c6ce]/30 bg-[#1d2022] border border-[rgba(74,127,199,0.05)] text-xs sm:text-sm cursor-not-allowed select-none flex items-center justify-center">
                    <span class="material-symbols-outlined text-sm sm:text-base">chevron_right</span>
                </span>
            @endif
        </div>
    </div>
@endif