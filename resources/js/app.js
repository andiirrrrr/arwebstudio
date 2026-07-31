import Alpine from 'alpinejs';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

window.Alpine = Alpine;
Alpine.start();

// ===== REGISTER GSAP PLUGINS =====
gsap.registerPlugin(ScrollTrigger);

// ===== PREMIUM ANIMATION CONTROLLER =====
class PremiumAnimator {
    constructor() {
        this.setupAnimations();
    }

    setupAnimations() {
        // =====================================================
        // 1. HOME PAGE ANIMATIONS
        // =====================================================
        this.homeAnimations();

        // =====================================================
        // 2. SERVICES PAGE ANIMATIONS
        // =====================================================
        this.servicesAnimations();

        // =====================================================
        // 3. SERVICE DETAIL PAGE ANIMATIONS
        // =====================================================
        this.serviceDetailAnimations();

        // =====================================================
        // 4. PORTFOLIO PAGE ANIMATIONS
        // =====================================================
        this.portfolioAnimations();

        // =====================================================
        // 5. ABOUT PAGE ANIMATIONS
        // =====================================================
        this.aboutAnimations();

        // =====================================================
        // 6. FAQ PAGE ANIMATIONS
        // =====================================================
        this.faqAnimations();

        // =====================================================
        // 7. CONTACT PAGE ANIMATIONS
        // =====================================================
        this.contactAnimations();

        // =====================================================
        // 8. UTILITY ANIMATIONS
        // =====================================================
        this.utilityAnimations();

        // ===== REFRESH SCROLLTRIGGER =====
        ScrollTrigger.refresh();
    }

    // =====================================================
    // HOME ANIMATIONS
    // =====================================================
    homeAnimations() {
        // ----- Hero Section -----
        const heroTimeline = gsap.timeline({
            defaults: { ease: 'power3.out', duration: 1.2 }
        });

        const heroBadge = document.querySelector('.hero-badge');
        const heroTitle = document.querySelector('.hero-title');
        const heroDesc = document.querySelector('.hero-desc');
        const heroButtons = document.querySelector('.hero-buttons');
        const heroImage = document.querySelector('.hero-image');
        const heroCard = document.querySelector('.hero-card');

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
        const servicesSection = document.querySelector('.services-section');
        const servicesBadge = document.querySelector('.services-badge');
        const servicesTitle = document.querySelector('.services-title');
        const servicesSubtitle = document.querySelector('.services-subtitle');
        const servicesCards = document.querySelectorAll('.service-card');

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
                    {
                        opacity: 0,
                        y: 80,
                        scale: 0.92,
                        rotationX: 8,
                        filter: 'blur(6px)'
                    },
                    {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        rotationX: 0,
                        filter: 'blur(0px)',
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
        const portfolioBadge = document.querySelector('.portfolio-badge');
        const portfolioTitle = document.querySelector('.portfolio-title');
        const portfolioCards = document.querySelectorAll('.portfolio-card');

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
                    {
                        opacity: 0,
                        y: 60,
                        scale: 0.94,
                        filter: 'blur(5px)'
                    },
                    {
                        opacity: 1,
                        y: 0,
                        scale: 1,
                        filter: 'blur(0px)',
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
        const testimoniCards = document.querySelectorAll('.testimoni-card');

        if (testimoniSection && testimoniCards.length) {
            testimoniCards.forEach((card, index) => {
                gsap.fromTo(card,
                    {
                        opacity: 0,
                        scale: 0.9,
                        rotation: 2,
                        filter: 'blur(4px)'
                    },
                    {
                        opacity: 1,
                        scale: 1,
                        rotation: 0,
                        filter: 'blur(0px)',
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
                {
                    opacity: 0,
                    scale: 0.95,
                    filter: 'blur(6px)'
                },
                {
                    opacity: 1,
                    scale: 1,
                    filter: 'blur(0px)',
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

    // =====================================================
    // SERVICES PAGE ANIMATIONS
    // =====================================================
    servicesAnimations() {
        // ----- Stagger Cards -----
        const serviceCards = document.querySelectorAll('.stagger-card');
        serviceCards.forEach((card, index) => {
            gsap.fromTo(card,
                {
                    opacity: 0,
                    y: 80,
                    scale: 0.92,
                    rotationX: 8,
                    filter: 'blur(6px)'
                },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    rotationX: 0,
                    filter: 'blur(0px)',
                    duration: 1,
                    delay: index * 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ----- Reveal Text (Per Character) -----
        const revealTexts = document.querySelectorAll('.reveal-text');
        revealTexts.forEach((el) => {
            // Split text into characters
            const text = el.textContent;
            el.textContent = '';
            const chars = text.split('');

            chars.forEach((char, i) => {
                const span = document.createElement('span');
                span.textContent = char === ' ' ? '\u00A0' : char;
                span.style.display = 'inline-block';
                span.style.opacity = '0';
                span.style.transform = 'translateY(40px) rotateX(20deg)';
                span.style.transition = 'all 1.2s cubic-bezier(0.16, 1, 0.3, 1)';
                span.style.transitionDelay = `${i * 0.04}s`;
                el.appendChild(span);
            });

            // Trigger animation on scroll
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        el.querySelectorAll('span').forEach((span, i) => {
                            setTimeout(() => {
                                span.style.opacity = '1';
                                span.style.transform = 'translateY(0) rotateX(0)';
                            }, i * 40);
                        });
                        observer.unobserve(el);
                    }
                });
            }, { threshold: 0.3 });
            observer.observe(el);
        });

        // ----- Cinematic Reveal -----
        const cinematicElements = document.querySelectorAll('.cinematic-reveal');
        cinematicElements.forEach((el) => {
            gsap.fromTo(el,
                {
                    opacity: 0,
                    scale: 0.95,
                    filter: 'blur(4px)'
                },
                {
                    opacity: 1,
                    scale: 1,
                    filter: 'blur(0px)',
                    duration: 1.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ----- Glass Cards (hover effect with GSAP) -----
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

    // =====================================================
    // SERVICE DETAIL PAGE ANIMATIONS
    // =====================================================
    serviceDetailAnimations() {
        // ----- Pricing Cards -----
        const pricingCards = document.querySelectorAll('.pricing-card');
        pricingCards.forEach((card, index) => {
            gsap.fromTo(card,
                {
                    opacity: 0,
                    y: 60,
                    scale: 0.9,
                    rotationX: 5,
                    filter: 'blur(4px)'
                },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    rotationX: 0,
                    filter: 'blur(0px)',
                    duration: 0.9,
                    delay: index * 0.12,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ----- Workflow Steps -----
        const workflowSteps = document.querySelectorAll('.workflow-step');
        workflowSteps.forEach((step, index) => {
            gsap.fromTo(step,
                {
                    opacity: 0,
                    y: 40,
                    scale: 0.9,
                    filter: 'blur(4px)'
                },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    filter: 'blur(0px)',
                    duration: 0.8,
                    delay: index * 0.1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: step,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ----- Related Projects -----
        const relatedProjects = document.querySelectorAll('.related-project');
        relatedProjects.forEach((project, index) => {
            gsap.fromTo(project,
                {
                    opacity: 0,
                    y: 50,
                    filter: 'blur(4px)'
                },
                {
                    opacity: 1,
                    y: 0,
                    filter: 'blur(0px)',
                    duration: 0.8,
                    delay: index * 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: project,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ----- Final CTA -----
        const finalCta = document.querySelector('.final-cta');
        if (finalCta) {
            gsap.fromTo(finalCta,
                {
                    opacity: 0,
                    scale: 0.95,
                    filter: 'blur(6px)'
                },
                {
                    opacity: 1,
                    scale: 1,
                    filter: 'blur(0px)',
                    duration: 1.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: finalCta,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        }

        // ----- Hero Image Parallax -----
        const heroImage = document.querySelector('.detail-hero-image');
        if (heroImage) {
            gsap.to(heroImage, {
                y: 50,
                ease: 'none',
                scrollTrigger: {
                    trigger: heroImage,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1.5
                }
            });
        }
    }

    // =====================================================
    // PORTFOLIO PAGE ANIMATIONS
    // =====================================================
    portfolioAnimations() {
        // ----- Hero Entrance -----
        const portfolioHeroBadge = document.querySelector('.portfolio-hero-badge');
        const portfolioHeroTitle = document.querySelector('.portfolio-hero-title');
        const portfolioHeroDesc = document.querySelector('.portfolio-hero-desc');
        const portfolioFilterBar = document.querySelector('.portfolio-filter-bar');

        if (portfolioHeroTitle) {
            const tl = gsap.timeline({ defaults: { ease: 'power3.out', duration: 1 } });
            if (portfolioHeroBadge) {
                tl.fromTo(portfolioHeroBadge, 
                    { opacity: 0, y: 20, filter: 'blur(4px)' }, 
                    { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.7 }
                );
            }
            tl.fromTo(portfolioHeroTitle, 
                { opacity: 0, y: 40, scale: 0.96, filter: 'blur(6px)' }, 
                { opacity: 1, y: 0, scale: 1, filter: 'blur(0px)', duration: 0.9 }, 
                '-=0.4'
            );
            if (portfolioHeroDesc) {
                tl.fromTo(portfolioHeroDesc, 
                    { opacity: 0, y: 20, filter: 'blur(4px)' }, 
                    { opacity: 1, y: 0, filter: 'blur(0px)', duration: 0.7 }, 
                    '-=0.5'
                );
            }
            if (portfolioFilterBar) {
                tl.fromTo(portfolioFilterBar, 
                    { opacity: 0, y: 20, scale: 0.95 }, 
                    { opacity: 1, y: 0, scale: 1, duration: 0.6 }, 
                    '-=0.3'
                );
            }
        }

        // ----- Project Cards Stagger -----
        const projectCards = document.querySelectorAll('.project-card, .portfolio-card');
        projectCards.forEach((card, index) => {
            gsap.fromTo(card,
                {
                    opacity: 0,
                    y: 50,
                    scale: 0.94,
                    filter: 'blur(4px)'
                },
                {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    filter: 'blur(0px)',
                    duration: 0.8,
                    delay: index * 0.08,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 88%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ----- Filter Button Toggle Active Class -----
        const filterButtons = document.querySelectorAll('.filter-btn');
        filterButtons.forEach((btn) => {
            btn.addEventListener('click', function () {
                filterButtons.forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }

    // =====================================================
    // ABOUT PAGE ANIMATIONS
    // =====================================================
    aboutAnimations() {
        // ----- Hero Entrance -----
        const aboutHeroTitle = document.querySelector('.about-hero-title');
        const aboutHeroDesc = document.querySelector('.about-hero-desc');
        const aboutHeroTags = document.querySelector('.about-hero-tags');
        const aboutHeroImage = document.querySelector('.about-hero-image');
        const aboutFloatingBadge = document.querySelector('.about-floating-badge');

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
                        toggleActions: 'play none none reverse'
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
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        }

        // ----- Core Values Cards Stagger -----
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
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });
    }

    // =====================================================
    // FAQ PAGE ANIMATIONS
    // =====================================================
    faqAnimations() {
        // ----- FAQ Hero Entrance -----
        const faqHeroBadge = document.querySelector('.faq-hero-badge');
        const faqHeroTitle = document.querySelector('.faq-hero-title');
        const faqHeroDesc = document.querySelector('.faq-hero-desc');

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
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });
    }

    // =====================================================
    // CONTACT PAGE ANIMATIONS
    // =====================================================
    contactAnimations() {
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

        // ----- Contact Info: heading block -----
        const contactInfoBadge  = document.querySelector('.contact-info-badge');
        const contactInfoTitle  = document.querySelector('.contact-info-title');
        const contactInfoDesc   = document.querySelector('.contact-info-desc');

        if (contactInfoTitle) {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: contactInfoTitle,
                    start: 'top 85%',
                    toggleActions: 'play none none reverse'
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

        // ----- Contact Info Items: staggered slide + icon bounce -----
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
                            toggleActions: 'play none none reverse'
                        }
                    }
                );

                // Icon bounce on scroll-in
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
                                toggleActions: 'play none none reverse'
                            }
                        }
                    );
                }
            });
        }

        // ----- Divider wipe animation -----
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
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        }

        // ----- WhatsApp button bounce -----
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
                        toggleActions: 'play none none reverse'
                    }
                }
            );

            // Continuous glow pulse on WA button
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

        // ----- Contact Form Wrapper: reveal from right -----
        const contactFormWrapper = document.querySelector('.contact-form-wrapper');
        const formHeader = document.querySelector('.form-header');

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
                        toggleActions: 'play none none reverse'
                    }
                }
            );

            // Form header fade in
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
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            }

            // Stagger each form field from bottom
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
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            });

            // Submit button bounce reveal
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
                            toggleActions: 'play none none reverse'
                        }
                    }
                );
            }

            // Focus glow on inputs: add JS-driven border highlight
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
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        }
    }

    // =====================================================
    // UTILITY ANIMATIONS
    // =====================================================
    utilityAnimations() {
        // ----- Parallax Backgrounds -----
        gsap.utils.toArray('.parallax-bg').forEach((el) => {
            gsap.to(el, {
                y: 100,
                ease: 'none',
                scrollTrigger: {
                    trigger: el,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1.2
                }
            });
        });

        // ----- Scroll Progress Indicator (Optional) -----
        const progressBar = document.querySelector('.scroll-progress');
        if (progressBar) {
            gsap.to(progressBar, {
                scaleX: 1,
                ease: 'none',
                scrollTrigger: {
                    trigger: document.body,
                    start: 'top top',
                    end: 'bottom bottom',
                    scrub: 1,
                    onUpdate: (self) => {
                        progressBar.style.transform = `scaleX(${self.progress})`;
                    }
                }
            });
        }

        // ----- Floating Animation for Badges -----
        gsap.utils.toArray('.float-badge').forEach((el) => {
            gsap.to(el, {
                y: -10,
                duration: 2,
                ease: 'sine.inOut',
                yoyo: true,
                repeat: -1
            });
        });

        // ----- Glow Pulse for CTA Buttons -----
        gsap.utils.toArray('.glow-pulse').forEach((el) => {
            gsap.to(el, {
                boxShadow: '0 0 40px rgba(245, 166, 35, 0.3), 0 0 80px rgba(245, 166, 35, 0.1)',
                duration: 2.5,
                ease: 'sine.inOut',
                yoyo: true,
                repeat: -1
            });
        });

        // ----- Number Counter -----
        const counters = document.querySelectorAll('.counter-number');
        counters.forEach((counter) => {
            const target = parseInt(counter.dataset.target);
            if (!target) return;

            const duration = 2000;
            const startTime = Date.now();

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.animateCounter(counter, target, duration, startTime);
                        observer.unobserve(counter);
                    }
                });
            }, { threshold: 0.5 });
            observer.observe(counter);
        });

        // ----- GSAP Reveal (Simple & Reliable) -----
        const gsapReveals = document.querySelectorAll('.gsap-reveal');
        gsapReveals.forEach((el) => {
            gsap.fromTo(el,
                { opacity: 0, y: 60, filter: 'blur(6px)' },
                {
                    opacity: 1,
                    y: 0,
                    filter: 'blur(0px)',
                    duration: 1.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ===== QUOTE TEXT ANIMATION =====
        const quoteTexts = document.querySelectorAll('.quote-text');
        quoteTexts.forEach((el, index) => {
            gsap.fromTo(el,
                {
                    opacity: 0,
                    x: 30,
                    scale: 0.95,
                    filter: 'blur(4px)'
                },
                {
                    opacity: 1,
                    x: 0,
                    scale: 1,
                    filter: 'blur(0px)',
                    duration: 1.2,
                    delay: 0.5 + (index * 0.2),
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 85%',
                        toggleActions: 'play none none reverse'
                    }
                }
            );
        });

        // ===== ADD MARQUEE CSS =====
        if (!document.getElementById('marquee-style')) {
            const style = document.createElement('style');
            style.id = 'marquee-style';
            style.textContent = `
                @keyframes marquee {
                    0% { transform: translateX(0); }
                    100% { transform: translateX(-100%); }
                }
                .marquee-text {
                    white-space: nowrap;
                    overflow: hidden;
                }
                .marquee-text span {
                    white-space: nowrap;
                    padding-right: 20px;
                    display: inline-block;
                    animation: marquee 20s linear infinite;
                }
            `;
            document.head.appendChild(style);
        }
    }

    // ===== HELPER: Animate Counter =====
    animateCounter(element, target, duration, startTime) {
        const update = () => {
            const elapsed = Date.now() - startTime;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.round(eased * target);
            element.textContent = current.toLocaleString('id-ID');
            if (progress < 1) {
                requestAnimationFrame(update);
            } else {
                element.textContent = target.toLocaleString('id-ID');
            }
        };
        requestAnimationFrame(update);
    }
}

// =====================================================
// INIT
// =====================================================
document.addEventListener('DOMContentLoaded', () => {
    new PremiumAnimator();
});

// =====================================================
// REFRESH ON RESIZE
// =====================================================
window.addEventListener('resize', () => {
    ScrollTrigger.refresh();
});