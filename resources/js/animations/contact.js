import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function contactAnimations() {
    // ----- Contact Hero Entrance (Immediate) -----
    const contactHeroBadge = document.querySelector('.contact-hero-badge');
    const contactHeroTitle = document.querySelector('.contact-hero-title');

    if (contactHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power2.out', force3D: true } });
        if (contactHeroBadge) {
            tl.fromTo(contactHeroBadge,
                { opacity: 0, y: -15 },
                { opacity: 1, y: 0, duration: 0.5 }
            );
        }
        tl.fromTo(contactHeroTitle,
            { opacity: 0, y: 25, scale: 0.98 },
            { opacity: 1, y: 0, scale: 1, duration: 0.7 },
            '-=0.3'
        );
    }

    // ----- Contact Info heading block -----
    const contactInfoBadge = document.querySelector('.contact-info-badge');
    const contactInfoTitle = document.querySelector('.contact-info-title');
    const contactInfoDesc  = document.querySelector('.contact-info-desc');

    if (contactInfoTitle) {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: contactInfoTitle,
                start: 'top 95%',
                toggleActions: 'play none none none'
            },
            defaults: { ease: 'power2.out', force3D: true }
        });
        if (contactInfoBadge) {
            tl.fromTo(contactInfoBadge,
                { opacity: 0, x: -20 },
                { opacity: 1, x: 0, duration: 0.5 }
            );
        }
        tl.fromTo(contactInfoTitle,
            { opacity: 0, x: -25 },
            { opacity: 1, x: 0, duration: 0.6 },
            '-=0.2'
        );
        if (contactInfoDesc) {
            tl.fromTo(contactInfoDesc,
                { opacity: 0, y: 15 },
                { opacity: 1, y: 0, duration: 0.5 },
                '-=0.3'
            );
        }
    }

    // ----- Contact Info Items staggered -----
    const contactInfoItems = document.querySelectorAll('.contact-info-item');
    if (contactInfoItems.length > 0) {
        contactInfoItems.forEach((item, index) => {
            gsap.fromTo(item,
                { opacity: 0, x: -30 },
                {
                    opacity: 1, x: 0,
                    duration: 0.5,
                    delay: index * 0.08,
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

            const iconWrap = item.querySelector('.contact-icon-wrap');
            if (iconWrap) {
                gsap.fromTo(iconWrap,
                    { scale: 0.7, opacity: 0 },
                    {
                        scale: 1, opacity: 1,
                        duration: 0.4,
                        delay: index * 0.08 + 0.1,
                        ease: 'back.out(1.5)',
                        force3D: true,
                        scrollTrigger: {
                            trigger: item,
                            start: 'top 96%',
                            toggleActions: 'play none none none'
                        }
                    }
                );
            }
        });
    }

    // ----- Divider wipe -----
    const contactDivider = document.querySelector('.contact-divider');
    if (contactDivider) {
        gsap.fromTo(contactDivider,
            { scaleX: 0, opacity: 0, transformOrigin: 'left center' },
            {
                scaleX: 1, opacity: 1,
                duration: 0.7,
                ease: 'power2.inOut',
                force3D: true,
                scrollTrigger: {
                    trigger: contactDivider,
                    start: 'top 96%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }

    // ----- WhatsApp button -----
    const contactWaBtn = document.querySelector('.contact-wa-btn');
    if (contactWaBtn) {
        gsap.fromTo(contactWaBtn,
            { opacity: 0, y: 20, scale: 0.95 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.6,
                ease: 'back.out(1.5)',
                force3D: true,
                scrollTrigger: {
                    trigger: contactWaBtn,
                    start: 'top 96%',
                    toggleActions: 'play none none none'
                }
            }
        );

        const waAnchor = contactWaBtn.querySelector('a');
        if (waAnchor) {
            gsap.to(waAnchor, {
                boxShadow: '0 0 32px rgba(37, 211, 102, 0.45), 0 0 64px rgba(37, 211, 102, 0.15)',
                duration: 2,
                ease: 'sine.inOut',
                yoyo: true,
                repeat: -1
            });
        }
    }

    // ----- Contact Form Wrapper -----
    const contactFormWrapper = document.querySelector('.contact-form-wrapper');
    const formHeader         = document.querySelector('.form-header');

    if (contactFormWrapper) {
        gsap.fromTo(contactFormWrapper,
            { opacity: 0, y: 35, scale: 0.97 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.8,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: contactFormWrapper,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );

        if (formHeader) {
            gsap.fromTo(formHeader,
                { opacity: 0, y: -10 },
                {
                    opacity: 1, y: 0,
                    duration: 0.5,
                    delay: 0.1,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: contactFormWrapper,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        const formGroups = contactFormWrapper.querySelectorAll('.form-group');
        formGroups.forEach((group, index) => {
            gsap.fromTo(group,
                { opacity: 0, y: 20 },
                {
                    opacity: 1, y: 0,
                    duration: 0.45,
                    delay: 0.2 + (index * 0.05),
                    ease: 'power2.out',
                    force3D: true,
                    scrollTrigger: {
                        trigger: contactFormWrapper,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        const submitBtn = contactFormWrapper.querySelector('.contact-submit-btn');
        if (submitBtn) {
            gsap.fromTo(submitBtn,
                { opacity: 0, y: 15, scale: 0.95 },
                {
                    opacity: 1, y: 0, scale: 1,
                    duration: 0.5,
                    delay: 0.2 + (formGroups.length * 0.05) + 0.05,
                    ease: 'back.out(1.5)',
                    force3D: true,
                    scrollTrigger: {
                        trigger: contactFormWrapper,
                        start: 'top 95%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        // Focus glow on inputs
        const inputs = contactFormWrapper.querySelectorAll('input, textarea');
        inputs.forEach((input) => {
            input.addEventListener('focus', () => {
                gsap.to(input, {
                    boxShadow: '0 0 0 3px rgba(245,166,35,0.18), 0 0 20px rgba(245,166,35,0.08)',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
            input.addEventListener('blur', () => {
                gsap.to(input, {
                    boxShadow: 'none',
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });
    }

    // ----- Google Maps Card -----
    const contactMapCard = document.querySelector('.contact-map-card');
    if (contactMapCard) {
        gsap.fromTo(contactMapCard,
            { opacity: 0, y: 40, scale: 0.96 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.8,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: contactMapCard,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }
}
