<!DOCTYPE html>
<html lang="id">
<head>
    <!-- ===== SEO GLOBAL ===== -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="robots" content="index, follow">
    <meta name="author" content="ARWebStudio">
    <meta name="language" content="id">

    <!-- ===== GEO TAGS ===== -->
    <meta name="geo.region" content="ID-SN">
    <meta name="geo.placename" content="Makassar">
    <meta name="geo.position" content="-5.147665;119.432731">
    <meta name="ICBM" content="-5.147665, 119.432731">

    <!-- ===== KEYWORDS ===== -->
    <meta name="keywords" content="jasa pembuatan website makassar, jasa website makassar, pembuatan website makassar, website UMKM makassar, jasa web makassar, company profile makassar, toko online makassar, custom web app makassar, ARWebStudio">

    <!-- ===== FAVICON ===== -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/logo-arwebstudio.png') }}">

    <!-- ===== CANONICAL URL ===== -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- ===== OPEN GRAPH ===== -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'Jasa Pembuatan Website di Makassar - ARWebStudio')">
    <meta property="og:description" content="@yield('og_description', 'ARWebStudio - Jasa pembuatan website profesional di Makassar. Landing Page, Company Profile, E-commerce, dan Custom Web App.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:site_name" content="ARWebStudio">
    <meta property="og:locale" content="id_ID">

    <!-- ===== TWITTER CARD ===== -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Jasa Pembuatan Website di Makassar - ARWebStudio')">
    <meta name="twitter:description" content="@yield('twitter_description', 'ARWebStudio - Jasa pembuatan website profesional di Makassar.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-image.jpg'))">

    <title>@yield('title', 'Jasa Pembuatan Website di Makassar - ARWebStudio')</title>
    <meta name="description" content="@yield('meta_description', 'ARWebStudio - Jasa pembuatan website profesional di Makassar untuk UMKM, company profile, e-commerce, dan custom web app.')">
    
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100..900&family=Sora:wght@100..900&display=swap" rel="stylesheet">

    <style>
        [x-cloak] { display: none !important; }
        html { scroll-behavior: smooth; }
        ::-webkit-scrollbar { display: none; }
        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
        .snap-x { scroll-snap-type: x mandatory; }
        .snap-center { scroll-snap-align: center; }

        @layer base {
            html, body { margin: 0; padding: 0; }
            body { overscroll-behavior: none; }
            main > :first-child { margin-top: 0 !important; }
            main > :last-child { margin-bottom: 0 !important; }
        }

        /* ===== ANIMATION CLASSES ===== */
        .reveal-text {
            display: inline-block;
        }
        .stagger-card {
            opacity: 0;
        }
        .cinematic-reveal {
            opacity: 0;
        }
        .pricing-card {
            opacity: 0;
        }
        .workflow-step {
            opacity: 0;
        }
        .related-project {
            opacity: 0;
        }
        .final-cta {
            opacity: 0;
        }
        /* ===== NAVBAR INTERAKTIF ===== */
        .nav-link {
            position: relative;
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 2px;
            background: #F5A623;
            border-radius: 2px;
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .nav-link:hover::after {
            width: 60%;
        }

        .nav-link.active::after {
            width: 24px;
        }

        /* Mobile menu item hover effect */
        .mobile-nav-item {
            transition: all 0.3s ease;
        }

        .mobile-nav-item:hover {
            transform: translateX(4px);
        }

        /* Hamburger animation */
        .hamburger-active .line-1 {
            transform: rotate(45deg) translate(5px, 5px);
        }
        .hamburger-active .line-2 {
            opacity: 0;
        }
        .hamburger-active .line-3 {
            transform: rotate(-45deg) translate(7px, -6px);
        }
    </style>

    <!-- ===== STRUCTURED DATA - LOCAL BUSINESS ===== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "ARWebStudio",
        "description": "Jasa pembuatan website profesional di Makassar. Melayani UMKM, company profile, e-commerce, dan custom web app.",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo-arwebstudio.png') }}",
        "image": "{{ asset('images/og-image.jpg') }}",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Makassar",
            "addressRegion": "Sulawesi Selatan",
            "addressCountry": "ID"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-5.147665",
            "longitude": "119.432731"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+6285922107678",
            "contactType": "sales",
            "availableLanguage": "Indonesian"
        },
        "sameAs": [
            "https://wa.me/6285922107678",
            "https://instagram.com/arwebstudio"
        ],
        "priceRange": "Rp 500.000 - Rp 25.000.000",
        "openingHours": "Mo-Fr 08:00-17:00",
        "serviceType": [
            "Jasa Pembuatan Website",
            "Company Profile",
            "Landing Page",
            "E-commerce",
            "Custom Web App"
        ],
        "areaServed": {
            "@type": "City",
            "name": "Makassar"
        }
    }
    </script>

</head>
<body class="bg-[#101415] font-['Plus_Jakarta_Sans'] text-[#e0e3e5] antialiased min-h-screen flex flex-col">

    <!-- ===================== NAVBAR ===================== -->
    <header x-data="{ mobileOpen: false }" class="fixed top-0 w-full z-50 bg-[#101415]/80 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)] border-b border-[rgba(74,127,199,0.2)]">
        <div class="h-20 max-w-[1280px] mx-auto px-5 lg:px-16 flex items-center justify-between gap-6">
            <!-- Logo -->
            <a href="/" class="flex-shrink-0 group">
                <img alt="AR Web Studio Logo" class="h-16 w-auto object-contain transition-transform duration-300 group-hover:scale-105" src="{{ asset('images/logo-arwebstudio.svg') }}">
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex flex-grow justify-center items-center gap-1 xl:gap-2" id="desktop-nav">
                @php
                    $currentRoute = request()->route()->getName();
                    $navLinks = [
                        ['name' => 'Beranda', 'route' => 'home', 'url' => '/'],
                        ['name' => 'Layanan', 'route' => 'services', 'url' => '/layanan'],
                        ['name' => 'Portfolio', 'route' => 'portfolio', 'url' => '/portofolio'],
                        ['name' => 'Tentang', 'route' => 'about', 'url' => '/tentang'],
                        ['name' => 'Blog', 'route' => 'blog', 'url' => '/blog'],
                        ['name' => 'FAQ', 'route' => 'faq', 'url' => '/faq'],
                    ];
                @endphp
                @foreach($navLinks as $link)
                    <a href="{{ $link['url'] }}" 
                    class="nav-link relative px-4 py-2 rounded-lg text-sm font-semibold uppercase tracking-[0.05em] transition-all duration-300
                            {{ request()->is(ltrim($link['url'], '/')) || request()->routeIs($link['route']) 
                                ? 'text-[#F5A623]' 
                                : 'text-[#c5c6ce] hover:text-[#e0e3e5] hover:bg-white/5' }}">
                        {{ $link['name'] }}
                        @if(request()->is(ltrim($link['url'], '/')) || request()->routeIs($link['route']))
                            <span class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-6 h-0.5 bg-[#F5A623] rounded-full"></span>
                        @endif
                    </a>
                @endforeach
            </nav>

            <!-- CTA Button + Mobile Menu -->
            <div class="flex items-center gap-4 flex-shrink-0">
                <a href="/kontak" class="hidden sm:flex bg-[#F5A623] text-[#0d1b35] px-6 py-2.5 rounded-full text-sm font-semibold hover:scale-105 hover:shadow-lg hover:shadow-[#F5A623]/20 transition-all duration-300 active:scale-95">
                    Hubungi Kami
                </a>
                
                <!-- Mobile Menu Toggle -->
                <button @click="mobileOpen = !mobileOpen" 
                        class="lg:hidden text-white p-2 rounded-lg hover:bg-white/5 transition-all duration-300 relative">
                    <span class="sr-only">Toggle menu</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-300" :class="mobileOpen ? 'rotate-90' : ''">
                        <path d="M3 6h18M3 12h18M3 18h18"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileOpen" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            x-cloak 
            class="lg:hidden bg-[#101415]/95 px-5 pb-6 pt-2 border-t border-[rgba(74,127,199,0.2)] shadow-2xl">
            <div class="flex flex-col space-y-1">
                @php
                    $mobileNavLinks = [
                        ['name' => 'Beranda', 'url' => '/'],
                        ['name' => 'Layanan', 'url' => '/layanan'],
                        ['name' => 'Portfolio', 'url' => '/portofolio'],
                        ['name' => 'Tentang', 'url' => '/tentang'],
                        ['name' => 'Blog', 'route' => 'blog', 'url' => '/blog'],
                        ['name' => 'FAQ', 'url' => '/faq'],
                    ];
                @endphp
                @foreach($mobileNavLinks as $link)
                    <a href="{{ $link['url'] }}" 
                    class="block py-3 px-4 rounded-xl text-base font-medium transition-all duration-300
                            {{ request()->is(ltrim($link['url'], '/')) 
                                ? 'bg-[#114784]/20 text-[#F5A623]' 
                                : 'text-[#c5c6ce] hover:text-[#e0e3e5] hover:bg-white/5' }}">
                        {{ $link['name'] }}
                    </a>
                @endforeach
                
                <!-- Mobile CTA -->
                <a href="/kontak" class="mt-4 block bg-[#F5A623] text-[#0d1b35] text-center px-6 py-3 rounded-xl font-semibold hover:scale-105 transition-all duration-300">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </header>

    <!-- ===================== MAIN CONTENT ===================== -->
    <main class="w-full pt-20 bg-[#101415] flex-grow">
        @yield('content')
    </main>

    <!-- ===================== FOOTER ===================== -->
    <footer class="w-full bg-[#0b0f10] py-20 border-t border-[rgba(74,127,199,0.2)]">
        <div class="max-w-[1280px] mx-auto px-5 lg:px-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16 lg:gap-6">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-2">
                    <h4 class="text-sm font-semibold text-[#e0e3e5] uppercase tracking-widest">Ar Web Studio</h4>
                </div>
                <p class="text-[16px] text-[#c5c6ce] max-w-xs">Layanan pengembangan web modern yang berfokus pada pengalaman digital berkinerja tinggi.</p>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="text-sm font-semibold text-[#e0e3e5] uppercase tracking-widest">Quick Links</h4>
                <nav class="flex flex-col gap-2">
                    <a href="/" class="text-[#c5c6ce] hover:text-[#F5A623] transition">Beranda</a>
                    <a href="/portofolio" class="text-[#c5c6ce] hover:text-[#F5A623] transition">Portfolio</a>
                    <a href="/tentang" class="text-[#c5c6ce] hover:text-[#F5A623] transition">Tentang</a>
                    <a href="/kontak" class="text-[#c5c6ce] hover:text-[#F5A623] transition">Kontak</a>
                </nav>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="text-sm font-semibold text-[#e0e3e5] uppercase tracking-widest">Layanan</h4>
                <nav class="flex flex-col gap-2">
                    <a href="/layanan" class="text-[#c5c6ce] hover:text-[#F5A623] transition">Landing Page</a>
                    <a href="/layanan" class="text-[#c5c6ce] hover:text-[#F5A623] transition">Company Profile</a>
                    <a href="/layanan" class="text-[#c5c6ce] hover:text-[#F5A623] transition">E-commerce</a>
                    <a href="/layanan" class="text-[#c5c6ce] hover:text-[#F5A623] transition">Custom Web App</a>
                </nav>
            </div>
            <div class="flex flex-col gap-4">
                <h4 class="text-sm font-semibold text-[#e0e3e5] uppercase tracking-widest">Kontak</h4>
                <p class="text-[#c5c6ce]">Makassar, Indonesia<br/>halo@arwebstudio.id<br/>085922107678</p>
            </div>
        </div>
        <div class="max-w-[1280px] mx-auto px-5 lg:px-16 mt-4 pt-4 border-t border-[rgba(74,127,199,0.2)] text-center text-sm text-[#c5c6ce]">
            &copy; {{ date('Y') }} ARWebStudio.id. Seluruh hak cipta dilindungi.
        </div>
    </footer>

</body>
</html>