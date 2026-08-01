import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function serviceDetailAnimations() {
    // ----- Pricing Cards -----
    const pricingCards = document.querySelectorAll('.pricing-card');
    pricingCards.forEach((card, index) => {
        gsap.fromTo(card,
            { opacity: 0, y: 60, scale: 0.9, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                duration: 0.9,
                delay: index * 0.12,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // ----- Workflow Steps -----
    const workflowSteps = document.querySelectorAll('.workflow-step');
    workflowSteps.forEach((step, index) => {
        gsap.fromTo(step,
            { opacity: 0, y: 40, scale: 0.9, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, scale: 1, filter: 'blur(0px)',
                duration: 0.8,
                delay: index * 0.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: step,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // ----- Related Projects -----
    const relatedProjects = document.querySelectorAll('.related-project');
    relatedProjects.forEach((project, index) => {
        gsap.fromTo(project,
            { opacity: 0, y: 50, filter: 'blur(4px)' },
            {
                opacity: 1, y: 0, filter: 'blur(0px)',
                duration: 0.8,
                delay: index * 0.15,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: project,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });

    // ----- Final CTA -----
    const finalCta = document.querySelector('.final-cta');
    if (finalCta) {
        gsap.fromTo(finalCta,
            { opacity: 0, scale: 0.95, filter: 'blur(6px)' },
            {
                opacity: 1, scale: 1, filter: 'blur(0px)',
                duration: 1.2,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: finalCta,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
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
