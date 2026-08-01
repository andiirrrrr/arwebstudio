import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function portfolioAnimations() {
    // ----- Hero Entrance -----
    const portfolioHeroBadge  = document.querySelector('.portfolio-hero-badge');
    const portfolioHeroTitle  = document.querySelector('.portfolio-hero-title');
    const portfolioHeroDesc   = document.querySelector('.portfolio-hero-desc');
    const portfolioFilterBar  = document.querySelector('.portfolio-filter-bar');

    if (portfolioHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1 } });
        if (portfolioHeroBadge) {
            tl.fromTo(portfolioHeroBadge,
                { opacity: 0, y: 20, filter: 'blur(4px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.7 }
            );
        }
        tl.fromTo(portfolioHeroTitle,
            { opacity: 0, y: 40, scale: 0.96, filter: 'blur(6px)' },
            { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 0.9 },
            '-=0.4'
        );
        if (portfolioHeroDesc) {
            tl.fromTo(portfolioHeroDesc,
                { opacity: 0, y: 20, filter: 'blur(4px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.7 },
                '-=0.5'
            );
        }
        if (portfolioFilterBar) {
            tl.fromTo(portfolioFilterBar,
                { opacity: 0, y: 20, scale: 0.95 },
                { opacity: 1, y: 0, scale: 1, duration: 0.6 },
                '-=0.3'
            );
        }
    }

    // ----- Project Cards: reveal saat halaman dibuka -----
    // FIXED: dulu ada dua sistem (setTimeout + GSAP), sekarang hanya GSAP
    // FIXED: toggleActions 'play none none reverse' → 'play none none none'
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach((card, index) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                y: 40,
                scale: 0.96,
                filter: 'blur(4px)'
            },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                filter: 'blur(0px)',
                duration: 0.7,
                delay: index * 0.07,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 92%',
                    // FIXED: 'play none none none' — card tidak menghilang saat scroll ke atas
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // ----- Filter Button Logic -----
    const filterCards = document.querySelectorAll('.filter-card');

    filterCards.forEach(btn => {
        btn.addEventListener('click', function () {
            const filterValue = this.getAttribute('data-filter');

            // Reset semua button
            filterCards.forEach(b => {
                b.classList.remove('active');
                b.style.background = '';
                b.style.color = '';
                b.style.borderColor = '';
                b.style.boxShadow = '';
            });

            // Set active
            this.classList.add('active');
            this.style.background = '#F5A623';
            this.style.color = '#0d1b35';
            this.style.borderColor = '#F5A623';
            this.style.boxShadow = '0 8px 30px rgba(245, 166, 35, 0.25)';

            // Filter & animate cards
            projectCards.forEach((card, index) => {
                const cardCategory = card.getAttribute('data-category');
                const isVisible = filterValue === 'all' || cardCategory === filterValue;

                if (isVisible) {
                    card.style.display = 'flex';
                    // Animasi masuk bersih tanpa setTimeout berlapis
                    gsap.fromTo(card,
                        { opacity: 0, y: 20, scale: 0.97 },
                        {
                            opacity: 1, y: 0, scale: 1,
                            duration: 0.5,
                            delay: index * 0.05,
                            ease: 'power3.out',
                            clearProps: 'filter'
                        }
                    );
                } else {
                    gsap.to(card, {
                        opacity: 0,
                        y: 10,
                        scale: 0.97,
                        duration: 0.3,
                        ease: 'power2.in',
                        onComplete: () => {
                            card.style.display = 'none';
                        }
                    });
                }
            });

            // Refresh ScrollTrigger setelah filter
            setTimeout(() => ScrollTrigger.refresh(), 350);
        });
    });
}
