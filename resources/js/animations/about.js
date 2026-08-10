import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function aboutAnimations() {
    // ----- Hero Entrance (Immediate on load) -----
    const aboutHeroTitle       = document.querySelector('.about-hero-title');
    const aboutHeroDesc        = document.querySelector('.about-hero-desc');
    const aboutHeroTags        = document.querySelector('.about-hero-tags');
    const aboutHeroImage       = document.querySelector('.about-hero-image');
    const aboutFloatingBadge   = document.querySelector('.about-floating-badge');

    if (aboutHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.8, force3D: true } });
        tl.fromTo(aboutHeroTitle,
            { opacity: 0, y: 30 },
            { opacity: 1, y: 0 }
        );
        if (aboutHeroDesc) {
            tl.fromTo(aboutHeroDesc,
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6 },
                '-=0.4'
            );
        }
        if (aboutHeroTags) {
            tl.fromTo(aboutHeroTags,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5 },
                '-=0.3'
            );
        }
        if (aboutHeroImage) {
            tl.fromTo(aboutHeroImage,
                { opacity: 0, y: 30, scale: 0.96 },
                { opacity: 1, y: 0, scale: 1, duration: 0.8 },
                '-=0.7'
            );
        }
        if (aboutFloatingBadge) {
            tl.fromTo(aboutFloatingBadge,
                { opacity: 0, y: 20, scale: 0.9 },
                { opacity: 1, y: 0, scale: 1, duration: 0.5 },
                '-=0.3'
            );
        }
    }

    // ----- Visi & Misi Cards -----
    const visiCard = document.querySelector('.visi-card');
    const misiCard = document.querySelector('.misi-card');

    if (visiCard) {
        gsap.fromTo(visiCard,
            { opacity: 0, y: 40, scale: 0.97 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.7,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: visiCard,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }

    if (misiCard) {
        gsap.fromTo(misiCard,
            { opacity: 0, y: 40, scale: 0.97 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.7,
                delay: 0.1,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: misiCard,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }

    // ----- Core Values Cards -----
    const valueCards = document.querySelectorAll('.about-value-card');
    valueCards.forEach((card, index) => {
        gsap.fromTo(card,
            { opacity: 0, y: 35, scale: 0.97 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.6,
                delay: (index % 2) * 0.08,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });
}
