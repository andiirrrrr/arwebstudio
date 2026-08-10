import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function serviceDetailAnimations() {
    // ----- Pricing Cards -----
    const pricingCards = document.querySelectorAll('.pricing-card');
    pricingCards.forEach((card, index) => {
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

    // ----- Workflow Steps -----
    const workflowSteps = document.querySelectorAll('.workflow-step');
    workflowSteps.forEach((step, index) => {
        gsap.fromTo(step,
            { opacity: 0, y: 30, scale: 0.97 },
            {
                opacity: 1, y: 0, scale: 1,
                duration: 0.6,
                delay: (index % 4) * 0.06,
                ease: 'power2.out',
                force3D: true,
                overwrite: 'auto',
                scrollTrigger: {
                    trigger: step,
                    start: 'top 95%',
                    toggleActions: 'play none none none',
                    onLeave: () => {
                        gsap.set(step, { opacity: 1, y: 0, scale: 1 });
                    }
                }
            }
        );
    });

    // ----- Related Projects -----
    const relatedProjects = document.querySelectorAll('.related-project');
    relatedProjects.forEach((project, index) => {
        gsap.fromTo(project,
            { opacity: 0, y: 35 },
            {
                opacity: 1, y: 0,
                duration: 0.6,
                delay: (index % 3) * 0.08,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: project,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // ----- Final CTA -----
    const finalCta = document.querySelector('.final-cta');
    if (finalCta) {
        gsap.fromTo(finalCta,
            { opacity: 0, y: 35, scale: 0.97 },
            {
                opacity: 1, scale: 1, y: 0,
                duration: 0.8,
                ease: 'power2.out',
                force3D: true,
                clearProps: 'transform,opacity',
                scrollTrigger: {
                    trigger: finalCta,
                    start: 'top 95%',
                    toggleActions: 'play none none none'
                }
            }
        );
    }

    // ----- Hero Image Parallax -----
    const heroImage = document.querySelector('.detail-hero-image');
    if (heroImage) {
        gsap.to(heroImage, {
            y: 40,
            ease: 'none',
            force3D: true,
            scrollTrigger: {
                trigger: heroImage,
                start: 'top bottom',
                end: 'bottom top',
                scrub: 1
            }
        });
    }
}
