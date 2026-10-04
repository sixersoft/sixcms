/**
 * Lucide Icons
 * Only the icons actually used are imported so the bundle stays small (tree-shaking).
 * Need a new icon? Import it below, add it to the object, then use <i data-lucide="icon-name"></i> in Blade.
 */
import {
    createIcons,
    ArrowRight,
    ArrowUpRight,
    Blocks,
    Check,
    ChevronDown,
    Code2,
    Gauge,
    MessageCircle,
    Globe,
    Layers,
    Rss,
    Mail,
    Menu,
    Moon,
    Quote,
    Rocket,
    ShieldCheck,
    Sparkles,
    Star,
    Sun,
    Send,
    X,
    Zap,
} from 'lucide';

export const icons = {
    ArrowRight,
    ArrowUpRight,
    Blocks,
    Check,
    ChevronDown,
    Code2,
    Gauge,
    MessageCircle,
    Globe,
    Layers,
    Rss,
    Mail,
    Menu,
    Moon,
    Quote,
    Rocket,
    ShieldCheck,
    Sparkles,
    Star,
    Sun,
    Send,
    X,
    Zap,
};

export function initIcons(root = document) {
    createIcons({
        icons,
        attrs: { 'stroke-width': 1.75, class: 'lucide' },
        nameAttr: 'data-lucide',
        root,
    });
}
