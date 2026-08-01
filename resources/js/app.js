import Alpine from 'alpinejs';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// ===== CORE INIT =====
window.Alpine = Alpine;
Alpine.start();
gsap.registerPlugin(ScrollTrigger);

// =====================================================
// UTILITY ANIMATIONS (dijalankan di semua halaman)
// =====================================================
function initUtilityAnimations() {
    // ----- Parallax Backgrounds -----
    gsap.utils.toArray('.parallax-bg').forEach((el) => {
        gsap.to(el, {
            y: 100,
            ease: 'none',
            scrollTrigger: {
                trigger: el,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1.2
            }
        });
    });

    // ----- Floating Badges -----
    gsap.utils.toArray('.float-badge').forEach((el) => {
        gsap.to(el, {
            y: -10,
            duration: 2,
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1
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

    // ----- Scroll Progress Indicator -----
    const progressBar = document.querySelector('.scroll-progress');
    if (progressBar) {
        gsap.to(progressBar, {
            scaleX: 1,
            ease: 'none',
            scrollTrigger: {
                trigger: document.body,
                start: 'top top',
                end: 'bottom bottom',
                scrub: 1,
                onUpdate: (self) => {
                    progressBar.style.transform = `scaleX(${self.progress})`;
                }
            }
        });
    }

    // ----- Number Counter -----
    const counters = document.querySelectorAll('.counter-number');
    counters.forEach((counter) => {
        const target = parseInt(counter.dataset.target);
        if (!target) return;

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(counter, target, 2000);
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });
        observer.observe(counter);
    });

    // ----- GSAP Reveal (generic utility class) -----
    const gsapReveals = document.querySelectorAll('.gsap-reveal');
    gsapReveals.forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, y: 60, filter: 'blur(6px)' },
            {
                opacity: 1, y: 0, filter: 'blur(0px)',
                duration: 1.2,
                ease: 'power3.out',
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
            { opacity: 0, x: 30, scale: 0.95, filter: 'blur(4px)' },
            {
                opacity: 1, x: 0, scale: 1, filter: 'blur(0px)',
                duration: 1.2,
                delay: 0.5 + (index * 0.2),
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });
}

// ===== HELPER: Animate Counter =====
function animateCounter(element, target, duration) {
    const startTime = Date.now();
    const update = () => {
        const elapsed = Date.now() - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const current = Math.round(eased * target);
        element.textContent = current.toLocaleString('id-ID');
        if (progress < 1) {
            requestAnimationFrame(update);
        } else {
            element.textContent = target.toLocaleString('id-ID');
        }
    };
    requestAnimationFrame(update);
}

// =====================================================
// LAZY PAGE DETECTION & DYNAMIC IMPORT
// Hanya animasi halaman yang sedang aktif yang di-load
// =====================================================
document.addEventListener('DOMContentLoaded', async () => {
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
    // (window.load lebih tepat daripada DOMContentLoaded untuk images)
    window.addEventListener('load', () => {
        ScrollTrigger.refresh();
    });
});

// =====================================================
// REFRESH SCROLLTRIGGER SAAT RESIZE
// =====================================================
window.addEventListener('resize', () => {
    ScrollTrigger.refresh();
});