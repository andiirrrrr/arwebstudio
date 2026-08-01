import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function servicesAnimations() {
    // ----- Stagger Cards -----
    const serviceCards = document.querySelectorAll('.stagger-card');
    serviceCards.forEach((card, index) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                y: 80,
                scale: 0.92,
                filter: 'blur(6px)'
            },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                filter: 'blur(0px)',
                duration: 1,
                delay: index * 0.15,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    // FIXED: was 'play none none reverse' — menyebabkan card hilang saat scroll ke atas
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // ----- Cinematic Reveal -----
    const cinematicElements = document.querySelectorAll('.cinematic-reveal');
    cinematicElements.forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, scale: 0.95, filter: 'blur(4px)' },
            {
                opacity: 1, scale: 1, filter: 'blur(0px)',
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

    // ----- Glass Cards hover effect -----
    const glassCards = document.querySelectorAll('.glass-card');
    glassCards.forEach((card) => {
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                scale: 1.02,
                duration: 0.4,
                ease: 'power2.out',
                boxShadow: '0 20px 60px rgba(245, 166, 35, 0.08)'
            });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                scale: 1,
                duration: 0.4,
                ease: 'power2.out',
                boxShadow: 'none'
            });
        });
    });
}
