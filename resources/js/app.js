/**
 * SixCMS — Main JS entry
 * প্রতিটি ফিচার আলাদা মডিউলে, এখানে শুধু বুটস্ট্র্যাপ।
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
