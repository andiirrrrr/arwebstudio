import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function servicesAnimations() {
    // ----- Stagger Cards -----
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach((card, index) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                y: 40,
                scale: 0.96,
            },
            {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: 0.6,
                delay: (index % 3) * 0.08,
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

    // ----- Cinematic Reveal -----
    const cinematicElements = document.querySelectorAll('.cinematic-reveal');
    cinematicElements.forEach((el) => {
        gsap.fromTo(el,
            { opacity: 0, y: 30, scale: 0.97 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.7,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 95%',
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
                duration: 0.3,
                ease: 'power2.out',
                force3D: true,
                boxShadow: '0 20px 60px rgba(245, 166, 35, 0.08)'
            });
        });
        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                scale: 1,
                duration: 0.3,
                ease: 'power2.out',
                force3D: true,
                boxShadow: 'none'
            });
        });
    });
}
