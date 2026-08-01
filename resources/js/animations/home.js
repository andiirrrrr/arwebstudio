import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function homeAnimations() {
    // ----- Hero Section -----
    const heroTimeline = gsap.timeline({
        defaults: { ease: 'power3.out', duration: 1.2 }
    });

    const heroBadge    = document.querySelector('.hero-badge');
    const heroTitle    = document.querySelector('.hero-title');
    const heroDesc     = document.querySelector('.hero-desc');
    const heroButtons  = document.querySelector('.hero-buttons');
    const heroImage    = document.querySelector('.hero-image');
    const heroCard     = document.querySelector('.hero-card');

    if (heroBadge) {
        heroTimeline
            .fromTo(heroBadge,
                { opacity: 0, y: 30, scale: 0.95, filter: 'blur(4px)' },
                { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 0.8 }
            )
            .fromTo(heroTitle,
                { opacity: 0, x: -60, scale: 0.97, filter: 'blur(6px)' },
                { opacity: 1, x: 0, scale: 1, filter: 'blur(0px)', duration: 1 }
            )
            .fromTo(heroDesc,
                { opacity: 0, y: 30, filter: 'blur(4px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.8 },
                '-=0.6'
            )
            .fromTo(heroButtons,
                { opacity: 0, y: 20, filter: 'blur(2px)' },
                { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.6 },
                '-=0.4'
            )
            .fromTo(heroImage,
                { opacity: 0, x: 80, scale: 0.93, filter: 'blur(8px)' },
                { opacity: 1, x: 0, scale: 1, filter: 'blur(0px)', duration: 1.2 },
                '-=1'
            )
            .fromTo(heroCard,
                { opacity: 0, y: 40, scale: 0.95, filter: 'blur(4px)' },
                { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 0.8 },
                '-=0.4'
            );
    }

    // ----- Services Section -----
    const servicesSection  = document.querySelector('.services-section');
    const servicesBadge    = document.querySelector('.services-badge');
    const servicesTitle    = document.querySelector('.services-title');
    const servicesSubtitle = document.querySelector('.services-subtitle');
    const servicesCards    = document.querySelectorAll('.service-card');

    if (servicesSection) {
        gsap.fromTo(servicesBadge,
            { opacity: 0, y: 20, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, filter: 'blur(0px)',
                duration: 0.8,
                scrollTrigger: {
                    trigger: servicesSection,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );

        gsap.fromTo(servicesTitle,
            { opacity: 0, clipPath: 'inset(0 100% 0 0)' },
            {
                opacity: 1, clipPath: 'inset(0 0% 0 0)',
                duration: 1.2,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: servicesSection,
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                }
            }
        );

        gsap.fromTo(servicesSubtitle,
            { opacity: 0, y: 20, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, filter: 'blur(0px)',
                duration: 0.8,
                delay: 0.3,
                scrollTrigger: {
                    trigger: servicesSection,
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                }
            }
        );

        servicesCards.forEach((card, index) => {
            gsap.fromTo(card,
                { opacity: 0, y: 80, scale: 0.92, filter: 'blur(6px)' },
                {
                    opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                    duration: 0.9,
                    delay: index * 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: servicesSection,
                        start: 'top 75%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });
    }

    // ----- Portfolio Section -----
    const portfolioSection = document.querySelector('.portfolio-section');
    const portfolioBadge   = document.querySelector('.portfolio-badge');
    const portfolioTitle   = document.querySelector('.portfolio-title');
    const portfolioCards   = document.querySelectorAll('.portfolio-card');

    if (portfolioSection) {
        gsap.fromTo(portfolioBadge,
            { opacity: 0, y: 20, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, filter: 'blur(0px)',
                duration: 0.8,
                scrollTrigger: {
                    trigger: portfolioSection,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );

        gsap.fromTo(portfolioTitle,
            { opacity: 0, clipPath: 'inset(0 100% 0 0)' },
            {
                opacity: 1, clipPath: 'inset(0 0% 0 0)',
                duration: 1.2,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: portfolioSection,
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                }
            }
        );

        portfolioCards.forEach((card, index) => {
            gsap.fromTo(card,
                { opacity: 0, y: 60, scale: 0.94, filter: 'blur(5px)' },
                {
                    opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                    duration: 0.8,
                    delay: index * 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: portfolioSection,
                        start: 'top 75%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });
    }

    // ----- Testimoni Section -----
    const testimoniSection = document.querySelector('.testimoni-section');
    const testimoniCards   = document.querySelectorAll('.testimoni-card');

    if (testimoniSection && testimoniCards.length) {
        testimoniCards.forEach((card, index) => {
            gsap.fromTo(card,
                { opacity: 0, scale: 0.9, rotation: 2, filter: 'blur(4px)' },
                {
                    opacity: 1, scale: 1, rotation: 0, filter: 'blur(0px)',
                    duration: 0.7,
                    delay: index * 0.08,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: testimoniSection,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });
    }

    // ----- CTA Section -----
    const ctaSection = document.querySelector('.cta-section');
    if (ctaSection) {
        gsap.fromTo(ctaSection,
            { opacity: 0, scale: 0.95, filter: 'blur(6px)' },
            {
                opacity: 1, scale: 1, filter: 'blur(0px)',
                duration: 1.2,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: ctaSection,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }
}
