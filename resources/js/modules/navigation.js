/**
 * Navigation — sticky header, mobile drawer, smooth anchor scroll, FAQ accordion
 */
export function initNavigation() {
    const header = document.querySelector('[data-header]');
    const drawer = document.querySelector('[data-drawer]');
    const openBtn = document.querySelector('[data-drawer-open]');
    const closeBtn = document.querySelector('[data-drawer-close]');

    /* Sticky header shadow */
    if (header) {
        const onScroll = () => header.classList.toggle('is-stuck', window.scrollY > 12);
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    /* Mobile drawer */
    const setDrawer = (open) => {
        if (!drawer) return;
        drawer.classList.toggle('hidden', !open);
        drawer.setAttribute('aria-hidden', String(!open));
        document.body.classList.toggle('overflow-hidden', open);
    };

    openBtn?.addEventListener('click', () => setDrawer(true));
    closeBtn?.addEventListener('click', () => setDrawer(false));
    drawer?.querySelectorAll('a').forEach((a) => a.addEventListener('click', () => setDrawer(false)));
    document.addEventListener('keydown', (e) => e.key === 'Escape' && setDrawer(false));

    /* FAQ accordion */
    document.querySelectorAll('[data-accordion] button').forEach((btn) => {
        btn.addEventListener('click', () => {
            const item = btn.closest('[data-accordion-item]');
            const panel = item?.querySelector('[data-accordion-panel]');
            const open = item?.classList.toggle('is-open');
            btn.setAttribute('aria-expanded', String(open));
            if (panel) panel.style.maxHeight = open ? `${panel.scrollHeight}px` : '0px';
        });
    });
}
