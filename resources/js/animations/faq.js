import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function faqAnimations() {
    // ----- FAQ Hero Entrance -----
    const faqHeroBadge = document.querySelector('.faq-hero-badge');
    const faqHeroTitle = document.querySelector('.faq-hero-title');
    const faqHeroDesc  = document.querySelector('.faq-hero-desc');

    if (faqHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1 } });
        if (faqHeroBadge) {
            tl.fromTo(faqHeroBadge,
                { opacity: 0, y: 20, filter: 'blur(4px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.7 }
            );
        }
        tl.fromTo(faqHeroTitle,
            { opacity: 0, y: 40, scale: 0.96, filter: 'blur(6px)' },
            { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 0.9 },
            '-=0.4'
        );
        if (faqHeroDesc) {
            tl.fromTo(faqHeroDesc,
                { opacity: 0, y: 20, filter: 'blur(4px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.7 },
                '-=0.5'
            );
        }
    }

    // ----- FAQ Accordion Items Stagger -----
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item, index) => {
        gsap.fromTo(item,
            { opacity: 0, y: 40, scale: 0.97, filter: 'blur(3px)' },
            {
                opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                duration: 0.7,
                delay: index * 0.08,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: item,
                    start: 'top 90%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });
}
