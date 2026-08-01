import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function aboutAnimations() {
    // ----- Hero Entrance -----
    const aboutHeroTitle       = document.querySelector('.about-hero-title');
    const aboutHeroDesc        = document.querySelector('.about-hero-desc');
    const aboutHeroTags        = document.querySelector('.about-hero-tags');
    const aboutHeroImage       = document.querySelector('.about-hero-image');
    const aboutFloatingBadge   = document.querySelector('.about-floating-badge');

    if (aboutHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1 } });
        tl.fromTo(aboutHeroTitle,
            { opacity: 0, x: -50, filter: 'blur(6px)' },
            { opacity: 1, x: 0, filter: 'blur(0px)', duration: 1 }
        );
        if (aboutHeroDesc) {
            tl.fromTo(aboutHeroDesc,
                { opacity: 0, y: 30, filter: 'blur(4px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.8 },
                '-=0.6'
            );
        }
        if (aboutHeroTags) {
            tl.fromTo(aboutHeroTags,
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6 },
                '-=0.4'
            );
        }
        if (aboutHeroImage) {
            tl.fromTo(aboutHeroImage,
                { opacity: 0, x: 60, scale: 0.93, filter: 'blur(8px)' },
                { opacity: 1, x: 0, scale: 1, filter: 'blur(0px)', duration: 1.1 },
                '-=1'
            );
        }
        if (aboutFloatingBadge) {
            tl.fromTo(aboutFloatingBadge,
                { opacity: 0, y: 30, scale: 0.9 },
                { opacity: 1, y: 0, scale: 1, duration: 0.6 },
                '-=0.3'
            );
        }
    }

    // ----- Visi & Misi Cards -----
    const visiCard = document.querySelector('.visi-card');
    const misiCard = document.querySelector('.misi-card');

    if (visiCard) {
        gsap.fromTo(visiCard,
            { opacity: 0, y: 60, scale: 0.95, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: visiCard,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }

    if (misiCard) {
        gsap.fromTo(misiCard,
            { opacity: 0, y: 80, scale: 0.95, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                duration: 1,
                delay: 0.2,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: misiCard,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }

    // ----- Core Values Cards -----
    const valueCards = document.querySelectorAll('.about-value-card');
    valueCards.forEach((card, index) => {
        gsap.fromTo(card,
            { opacity: 0, y: 50, scale: 0.95, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                duration: 0.8,
                delay: index * 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 88%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });
}
