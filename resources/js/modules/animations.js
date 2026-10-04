/**
 * GSAP Animations
 * Add data-anim="fade-up|fade|zoom|left|right" to any element to enable scroll animation.
 */
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const PRESETS = {
    fade: { opacity: 0 },
    'fade-up': { opacity: 0, y: 36 },
    'fade-down': { opacity: 0, y: -28 },
    left: { opacity: 0, x: -44 },
    right: { opacity: 0, x: 44 },
    zoom: { opacity: 0, scale: 0.92 },
};

export function initAnimations() {
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (reduced) {
        document.querySelectorAll('[data-anim]').forEach((el) => el.classList.add('is-ready'));
        return;
    }

    /* 1. Hero — runs on page load */
    const hero = gsap.utils.toArray('[data-anim-hero]');
    if (hero.length) {
        gsap.set(hero, { opacity: 0, y: 40 });
        hero.forEach((el) => el.classList.add('is-ready'));
        gsap.to(hero, { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out', stagger: 0.12, delay: 0.1 });
    }

    /* 2. Scroll reveal */
    gsap.utils.toArray('[data-anim]').forEach((el) => {
        const from = PRESETS[el.dataset.anim] ?? PRESETS['fade-up'];
        const delay = parseFloat(el.dataset.animDelay ?? 0);

        el.classList.add('is-ready');
        gsap.fromTo(
            el,
            from,
            {
                opacity: 1,
                x: 0,
                y: 0,
                scale: 1,
                duration: 0.85,
                delay,
                ease: 'power3.out',
                scrollTrigger: { trigger: el, start: 'top 85%', once: true },
            },
        );
    });

    /* 3. Counter */
    gsap.utils.toArray('[data-count]').forEach((el) => {
        const target = parseFloat(el.dataset.count);
        const obj = { v: 0 };
        gsap.to(obj, {
            v: target,
            duration: 1.6,
            ease: 'power2.out',
            scrollTrigger: { trigger: el, start: 'top 90%', once: true },
            onUpdate: () => {
                el.textContent = Number.isInteger(target)
                    ? Math.round(obj.v).toLocaleString('en-US')
                    : obj.v.toFixed(1);
            },
        });
    });

    /* 4. Parallax */
    gsap.utils.toArray('[data-parallax]').forEach((el) => {
        gsap.to(el, {
            yPercent: parseFloat(el.dataset.parallax ?? -12),
            ease: 'none',
            scrollTrigger: { trigger: el, start: 'top bottom', end: 'bottom top', scrub: true },
        });
    });

    ScrollTrigger.refresh();
}
