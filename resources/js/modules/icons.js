/**
 * Lucide Icons
 * শুধু ব্যবহৃত আইকনগুলো import করা হয়েছে যাতে bundle ছোট থাকে (tree-shaking)।
 * নতুন আইকন লাগলে নিচের অবজেক্টে যোগ করো এবং Blade-এ <i data-lucide="icon-name"></i> লেখো।
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
