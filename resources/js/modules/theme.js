/**
 * Dark / Light theme — localStorage + system preference
 */
const KEY = 'sixcms-theme';

export function applyTheme(mode) {
    document.documentElement.classList.toggle('dark', mode === 'dark');
    document.documentElement.style.colorScheme = mode;
}

export function initTheme() {
    const stored = localStorage.getItem(KEY);
    const system = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    applyTheme(stored ?? system);

    document.querySelectorAll('[data-theme-toggle]').forEach((btn) => {
        btn.addEventListener('click', () => {
            const next = document.documentElement.classList.contains('dark') ? 'light' : 'dark';
            applyTheme(next);
            localStorage.setItem(KEY, next);
        });
    });
}
