import Alpine from 'alpinejs';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// ===== CORE INIT =====
window.Alpine = Alpine;
Alpine.start();
gsap.registerPlugin(ScrollTrigger);

// Force GPU compositing for all GSAP animations globally
gsap.defaults({ force3D: true });

// =====================================================
// UTILITY ANIMATIONS (dijalankan di semua halaman)
// =====================================================
function initUtilityAnimations() {
    // ----- Floating Badges -----
    gsap.utils.toArray('.float-badge').forEach((el) => {
        gsap.to(el, {
            y: -10,
            duration: 2,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
            force3D: true
        });
    });

    // ----- Glow Pulse for CTA Buttons -----
    gsap.utils.toArray('.glow-pulse').forEach((el) => {
        gsap.to(el, {
            boxShadow: '0 0 40px rgba(245, 166, 35, 0.3), 0 0 80px rgba(245, 166, 35, 0.1)',
            duration: 2.5,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1
        });
    });

    // ----- GSAP Reveal (generic utility class) -----
    const gsapReveals = document.querySelectorAll('.gsap-reveal');
    gsapReveals.forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, y: 60 },
            {
                opacity: 1, y: 0,
                duration: 1.2,
                ease: 'power3.out',
                force3D: true,
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // ----- Quote Text Animation -----
    const quoteTexts = document.querySelectorAll('.quote-text');
    quoteTexts.forEach((el, index) => {
        gsap.fromTo(el,
            { opacity: 0, x: 30, scale: 0.95 },
            {
                opacity: 1, x: 0, scale: 1,
                duration: 1.2,
                delay: 0.5 + (index * 0.2),
                ease: 'power3.out',
                force3D: true,
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });
}

// =====================================================
// LAZY PAGE DETECTION & DYNAMIC IMPORT
// Hanya animasi halaman yang sedang aktif yang di-load.
// Dijalankan setelah window.load untuk mengurangi beban
// main-thread saat render awal (meningkatkan FCP/LCP/TBT).
// =====================================================
window.addEventListener('load', async () => {
    // Jalankan utility di semua halaman
    initUtilityAnimations();

    // Deteksi halaman dari data-page attribute di <body>
    const page = document.body.dataset.page;

    if (page === 'home') {
        const { homeAnimations } = await import('./animations/home.js');
        homeAnimations();
    } else if (page === 'services') {
        const { servicesAnimations } = await import('./animations/services.js');
        servicesAnimations();
    } else if (page === 'portfolio') {
        const { portfolioAnimations } = await import('./animations/portfolio.js');
        portfolioAnimations();
    } else if (page === 'about') {
        const { aboutAnimations } = await import('./animations/about.js');
        aboutAnimations();
    } else if (page === 'faq') {
        const { faqAnimations } = await import('./animations/faq.js');
        faqAnimations();
    } else if (page === 'contact') {
        const { contactAnimations } = await import('./animations/contact.js');
        contactAnimations();
    } else if (page === 'service-detail') {
        const { serviceDetailAnimations } = await import('./animations/service-detail.js');
        serviceDetailAnimations();
    }

    // Refresh ScrollTrigger setelah semua asset halaman siap
    ScrollTrigger.refresh();
});

// =====================================================
// DEBOUNCED REFRESH SCROLLTRIGGER SAAT RESIZE
// =====================================================
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        ScrollTrigger.refresh();
    }, 200);
});