import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function contactAnimations() {
    // ----- Contact Hero Entrance -----
    const contactHeroBadge = document.querySelector('.contact-hero-badge');
    const contactHeroTitle = document.querySelector('.contact-hero-title');

    if (contactHeroTitle) {
        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });
        if (contactHeroBadge) {
            tl.fromTo(contactHeroBadge,
                { opacity: 0, y: -20, scale: 0.8, filter: 'blur(6px)' },
                { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 0.8 }
            );
        }
        tl.fromTo(contactHeroTitle,
            { opacity: 0, y: 50, scale: 0.95, filter: 'blur(8px)' },
            { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 1.1 },
            '-=0.5'
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
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            defaults: { ease: 'power3.out' }
        });
        if (contactInfoBadge) {
            tl.fromTo(contactInfoBadge,
                { opacity: 0, x: -30, filter: 'blur(4px)' },
                { opacity: 1, x: 0, filter: 'blur(0px)', duration: 0.6 }
            );
        }
        tl.fromTo(contactInfoTitle,
            { opacity: 0, x: -40, filter: 'blur(6px)' },
            { opacity: 1, x: 0, filter: 'blur(0px)', duration: 0.8 },
            '-=0.3'
        );
        if (contactInfoDesc) {
            tl.fromTo(contactInfoDesc,
                { opacity: 0, y: 20 },
                { opacity: 1, y: 0, duration: 0.6 },
                '-=0.4'
            );
        }
    }

    // ----- Contact Info Items staggered -----
    const contactInfoItems = document.querySelectorAll('.contact-info-item');
    if (contactInfoItems.length > 0) {
        contactInfoItems.forEach((item, index) => {
            gsap.fromTo(item,
                { opacity: 0, x: -50, filter: 'blur(4px)' },
                {
                    opacity: 1, x: 0, filter: 'blur(0px)',
                    duration: 0.7,
                    delay: index * 0.14,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 88%',
                        toggleActions: 'play none none none'
                    }
                }
            );

            const iconWrap = item.querySelector('.contact-icon-wrap');
            if (iconWrap) {
                gsap.fromTo(iconWrap,
                    { scale: 0.5, opacity: 0, rotation: -15 },
                    {
                        scale: 1, opacity: 1, rotation: 0,
                        duration: 0.6,
                        delay: index * 0.14 + 0.15,
                        ease: 'back.out(2)',
                        scrollTrigger: {
                            trigger: item,
                            start: 'top 88%',
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
                duration: 0.9,
                ease: 'power2.inOut',
                scrollTrigger: {
                    trigger: contactDivider,
                    start: 'top 90%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }

    // ----- WhatsApp button -----
    const contactWaBtn = document.querySelector('.contact-wa-btn');
    if (contactWaBtn) {
        gsap.fromTo(contactWaBtn,
            { opacity: 0, y: 30, scale: 0.9 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.8,
                ease: 'back.out(1.7)',
                scrollTrigger: {
                    trigger: contactWaBtn,
                    start: 'top 90%',
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
            { opacity: 0, x: 60, scale: 0.96, filter: 'blur(8px)' },
            {
                opacity: 1, x: 0, scale: 1, filter: 'blur(0px)',
                duration: 1.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: contactFormWrapper,
                    start: 'top 82%',
                    toggleActions: 'play none none none'
                }
            }
        );

        if (formHeader) {
            gsap.fromTo(formHeader,
                { opacity: 0, y: -15 },
                {
                    opacity: 1, y: 0,
                    duration: 0.6,
                    delay: 0.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: contactFormWrapper,
                        start: 'top 82%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        }

        const formGroups = contactFormWrapper.querySelectorAll('.form-group');
        formGroups.forEach((group, index) => {
            gsap.fromTo(group,
                { opacity: 0, y: 30, filter: 'blur(3px)' },
                {
                    opacity: 1, y: 0, filter: 'blur(0px)',
                    duration: 0.55,
                    delay: 0.35 + (index * 0.09),
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: contactFormWrapper,
                        start: 'top 82%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        const submitBtn = contactFormWrapper.querySelector('.contact-submit-btn');
        if (submitBtn) {
            gsap.fromTo(submitBtn,
                { opacity: 0, y: 20, scale: 0.95 },
                {
                    opacity: 1, y: 0, scale: 1,
                    duration: 0.7,
                    delay: 0.35 + (formGroups.length * 0.09) + 0.1,
                    ease: 'back.out(1.5)',
                    scrollTrigger: {
                        trigger: contactFormWrapper,
                        start: 'top 82%',
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
            { opacity: 0, y: 70, scale: 0.94, filter: 'blur(8px)' },
            {
                opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                duration: 1.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: contactMapCard,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }
}
