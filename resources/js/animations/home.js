import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function homeAnimations() {
    // ----- Hero Section (Immediate) -----
    const heroTimeline = gsap.timeline({
        defaults: { ease: 'power2.out', duration: 0.8, force3D: true }
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
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.5 }
            )
            .fromTo(heroTitle,
                { opacity: 0, y: 30, scale: 0.98 },
                { opacity: 1, y: 0, scale: 1, duration: 0.8 },
                '-=0.3'
            )
            .fromTo(heroDesc,
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6 },
                '-=0.5'
            )
            .fromTo(heroButtons,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5 },
                '-=0.4'
            )
            .fromTo(heroImage,
                { opacity: 0, y: 30, scale: 0.96 },
                { opacity: 1, y: 0, scale: 1, duration: 0.8 },
                '-=0.7'
            )
            .fromTo(heroCard,
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6 },
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
        if (servicesBadge) {
            gsap.fromTo(servicesBadge,
                { opacity: 0, y: 15 },
                {
                    opacity: 1, y: 0,
                    duration: 0.5,
                    force3D: true,
                    scrollTrigger: {
                        trigger: servicesSection,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        if (servicesTitle) {
            gsap.fromTo(servicesTitle,
                { opacity: 0, y: 20 },
                {
                    opacity: 1, y: 0,
                    duration: 0.7,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: servicesSection,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        if (servicesSubtitle) {
            gsap.fromTo(servicesSubtitle,
                { opacity: 0, y: 15 },
                {
                    opacity: 1, y: 0,
                    duration: 0.5,
                    delay: 0.15,
                    force3D: true,
                    scrollTrigger: {
                        trigger: servicesSection,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        servicesCards.forEach((card, index) => {
            gsap.fromTo(card,
                { opacity: 0, y: 40, scale: 0.96 },
                {
                    opacity: 1, y: 0, scale: 1,
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
    }

    // ----- Portfolio Section -----
    const portfolioSection = document.querySelector('.portfolio-section');
    const portfolioBadge   = document.querySelector('.portfolio-badge');
    const portfolioTitle   = document.querySelector('.portfolio-title');
    const portfolioCards   = document.querySelectorAll('.portfolio-card');

    if (portfolioSection) {
        if (portfolioBadge) {
            gsap.fromTo(portfolioBadge,
                { opacity: 0, y: 15 },
                {
                    opacity: 1, y: 0,
                    duration: 0.5,
                    force3D: true,
                    scrollTrigger: {
                        trigger: portfolioSection,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        if (portfolioTitle) {
            gsap.fromTo(portfolioTitle,
                { opacity: 0, y: 20 },
                {
                    opacity: 1, y: 0,
                    duration: 0.7,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: portfolioSection,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        portfolioCards.forEach((card, index) => {
            gsap.fromTo(card,
                { opacity: 0, y: 40, scale: 0.96 },
                {
                    opacity: 1, y: 0, scale: 1,
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
    }

    // ----- Testimoni Section -----
    const testimoniSection = document.querySelector('.testimoni-section');
    const testimoniCards   = document.querySelectorAll('.testimoni-card');

    if (testimoniSection && testimoniCards.length) {
        testimoniCards.forEach((card, index) => {
            gsap.fromTo(card,
                { opacity: 0, y: 30, scale: 0.97 },
                {
                    opacity: 1, y: 0, scale: 1,
                    duration: 0.6,
                    delay: (index % 3) * 0.06,
                    ease: 'power2.out',
                    force3D: true,
                    clearProps: 'transform,opacity',
                    scrollTrigger: {
                        trigger: testimoniSection,
                        start: 'top 95%',
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
            { opacity: 0, y: 35, scale: 0.97 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.8,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: ctaSection,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }
}
