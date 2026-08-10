import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function faqAnimations() {
    // ----- FAQ Hero Entrance -----
    const faqHeroBadge = document.querySelector('.faq-hero-badge');
    const faqHeroTitle = document.querySelector('.faq-hero-title');
    const faqHeroDesc  = document.querySelector('.faq-hero-desc');

    if (faqHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power2.out', duration: 0.7, force3D: true } });
        if (faqHeroBadge) {
            tl.fromTo(faqHeroBadge,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5 }
            );
        }
        tl.fromTo(faqHeroTitle,
            { opacity: 0, y: 25, scale: 0.98 },
            { opacity: 1, y: 0, scale: 1, duration: 0.7 },
            '-=0.3'
        );
        if (faqHeroDesc) {
            tl.fromTo(faqHeroDesc,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5 },
                '-=0.4'
            );
        }
    }

    // ----- FAQ Accordion Items Stagger -----
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item, index) => {
        gsap.fromTo(item,
            { opacity: 0, y: 25, scale: 0.98 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.5,
                delay: (index % 4) * 0.04,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 96%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });
}
