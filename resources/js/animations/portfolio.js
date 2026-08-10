import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function portfolioAnimations() {
    // ----- Hero Entrance (Immediate) -----
    const portfolioHeroBadge  = document.querySelector('.portfolio-hero-badge');
    const portfolioHeroTitle  = document.querySelector('.portfolio-hero-title');
    const portfolioHeroDesc   = document.querySelector('.portfolio-hero-desc');
    const portfolioFilterBar  = document.querySelector('.portfolio-filter-bar');

    if (portfolioHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.8, force3D: true } });
        if (portfolioHeroBadge) {
            tl.fromTo(portfolioHeroBadge,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5 }
            );
        }
        tl.fromTo(portfolioHeroTitle,
            { opacity: 0, y: 25, scale: 0.98 },
            { opacity: 1, y: 0, scale: 1, duration: 0.7 },
            '-=0.3'
        );
        if (portfolioHeroDesc) {
            tl.fromTo(portfolioHeroDesc,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5 },
                '-=0.4'
            );
        }
        if (portfolioFilterBar) {
            tl.fromTo(portfolioFilterBar,
                { opacity: 0, y: 15, scale: 0.98 },
                { opacity: 1, y: 0, scale: 1, duration: 0.5 },
                '-=0.3'
            );
        }
    }

    // ----- Project Cards -----
    const projectCards = document.querySelectorAll('.project-card');
    projectCards.forEach((card, index) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                y: 35,
                scale: 0.97,
            },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.6,
                delay: (index % 3) * 0.06,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 96%',
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
                    gsap.fromTo(card,
                        { opacity: 0, y: 20, scale: 0.97 },
                        {
                            opacity: 1, y: 0, scale: 1,
                            duration: 0.4,
                            delay: (index % 3) * 0.04,
                            ease: 'power2.out',
                            force3D: true,
                            clearProps: 'transform,opacity'
                        }
                    );
                } else {
                    gsap.to(card, {
                        opacity: 0,
                        y: 10,
                        scale: 0.97,
                        duration: 0.25,
                        ease: 'power2.in',
                        force3D: true,
                        onComplete: () => {
                            card.style.display = 'none';
                        }
                    });
                }
            });

            setTimeout(() => ScrollTrigger.refresh(), 300);
        });
    });
}
