/**
 * SixCMS — Main JS entry
 * Every feature lives in its own module; this file only bootstraps them.
 */

import { initIcons } from './modules/icons';
import { initAnimations } from './modules/animations';
import { initNavigation } from './modules/navigation';
import { initTheme } from './modules/theme';

const boot = () => {
    initTheme();
    initIcons();
    initNavigation();
    initAnimations();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', boot, { once: true });
} else {
    boot();
}
