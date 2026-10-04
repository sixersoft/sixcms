/**
 * Static design preview generator.
 *
 * PHP is not required: this script renders a plain HTML copy of the Blade
 * markup (same classes, same CSS/JS bundle) so the design can be reviewed in a
 * browser. The real page is still resources/views/frontend/index.blade.php.
 *
 *   npm run build && node tools/preview.mjs && npm run preview:serve
 */
import { readFileSync, writeFileSync, mkdirSync, symlinkSync } from 'node:fs';

const manifest = JSON.parse(readFileSync('public/build/manifest.json', 'utf8'));
const css = '/build/' + manifest['resources/css/app.css'].file;
const js = '/build/' + manifest['resources/js/app.js'].file;

/* ------------------------------------------------------------------ data */
const menu = [
    ['Features', '#features'],
    ['How it works', '#how'],
    ['Pricing', '#pricing'],
    ['FAQ', '#faq'],
];

const features = [
    ['zap', 'Lightning performance', 'Vite builds, lazy loading and optimized assets keep every page under a second.'],
    ['layers', 'Clean components', 'Blade layouts, partials and sections — change any piece in isolation.'],
    ['sparkles', 'GSAP animations', 'Just add a data-anim attribute to get scroll reveals, counters and parallax.'],
    ['shield-check', 'Security first', 'CSRF and XSS protection with the latest Laravel 13 security defaults.'],
    ['globe', 'SEO & i18n ready', 'Open Graph tags, canonical URLs and semantic HTML out of the box.'],
    ['rocket', 'Effortless deploys', 'One command to build, then ship to any host or VPS in minutes.'],
];

const steps = [
    ['01', 'Install the project', 'Run composer install and npm install — your environment is ready in a minute.'],
    ['02', 'Customize the theme', 'Change colors and fonts in theme.css and the whole site updates instantly.'],
    ['03', 'Add your content', 'Drop your copy and images into the Blade sections. No complexity involved.'],
    ['04', 'Go live', 'Run npm run build, upload to your server and your site is online.'],
];

const reviews = [
    ['Arif Islam', 'Full-stack developer', 'The structure is so clean that adding a new section takes less than a minute. The GSAP integration is brilliant.'],
    ['Nusrat Jahan', 'UI designer', 'I rebranded the entire site just by editing the theme tokens. A dream setup for designers.'],
    ['Tanvir Hasan', 'Agency founder', 'Our client sites load twice as fast now and the performance score never drops below 98.'],
];

const plans = [
    ['Starter', '$0', 'month', false, 'For personal projects and learning.', ['1 website', 'Core components', 'Community support', 'Monthly updates']],
    ['Pro', '$19', 'month', true, 'Best for freelancers and small agencies.', ['Unlimited websites', 'All premium sections', 'Premium GSAP presets', 'Priority support', 'SEO toolkit']],
    ['Enterprise', 'Custom', null, false, 'For larger teams with special needs.', ['Dedicated developer', 'Custom integrations', '24/7 support with SLA', 'On-premise deployment']],
];

const faqs = [
    ['What do I need to run it?', 'PHP 8.3+, Composer and Node.js 20+. Then simply run composer install and npm install.'],
    ['How do I change colors or fonts?', 'Edit the @theme block in resources/css/partials/theme.css — the change is applied across the entire site automatically.'],
    ['Can I add more icons?', 'Import the icon from Lucide in resources/js/modules/icons.js, add it to the object, then use data-lucide="icon-name" in your Blade markup.'],
    ['Can animations be disabled?', 'All animations switch off automatically when the browser requests reduced motion.'],
    ['Is dark mode included?', 'Yes — automatic from system preference plus a manual toggle, stored in localStorage.'],
];

const columns = {
    Product: ['Features', 'Pricing', 'Integrations', 'Changelog'],
    Resources: ['Documentation', 'Blog', 'Guides', 'Support'],
    Company: ['About', 'Careers', 'Contact', 'Privacy'],
};

const icon = (n, c = '') => `<i data-lucide="${n}"${c ? ` class="${c}"` : ''}></i>`;

/* ------------------------------------------------------------------ html */
const html = `<!DOCTYPE html>
<html lang="en" class="scroll-pt-24">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SixCMS — Build modern websites faster</title>
<script>(()=>{const t=localStorage.getItem('sixcms-theme')??(matchMedia('(prefers-color-scheme: dark)').matches?'dark':'light');document.documentElement.classList.toggle('dark',t==='dark');document.documentElement.style.colorScheme=t;})();</script>
<link rel="stylesheet" href="${css}">
<script type="module" src="${js}"></script>
</head>
<body class="min-h-dvh antialiased">

<header data-header class="sticky top-0 z-50 border-b border-transparent transition-all duration-300 [&.is-stuck]:border-[var(--surface-border)] [&.is-stuck]:glass [&.is-stuck]:shadow-soft">
  <div class="container-page flex h-16 items-center justify-between gap-6 lg:h-20">
    <a href="/" class="flex items-center gap-2.5 font-display text-lg font-semibold">
      <span class="grid size-9 place-items-center rounded-xl bg-brand-600 text-white shadow-glow">${icon('blocks')}</span>
      <span>SixCMS</span>
    </a>
    <nav class="hidden items-center gap-1 lg:flex" aria-label="Main navigation">
      ${menu.map(([l, h]) => `<a href="${h}" class="rounded-full px-4 py-2 text-sm font-medium text-muted transition hover:bg-brand-500/10 hover:text-brand-600 dark:hover:text-brand-300">${l}</a>`).join('')}
    </nav>
    <div class="flex items-center gap-2">
      <button type="button" data-theme-toggle aria-label="Toggle theme" class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)] transition hover:bg-brand-500/10">
        ${icon('sun', 'hidden dark:block')}${icon('moon', 'dark:hidden')}
      </button>
      <a href="#cta" class="btn btn-primary hidden sm:inline-flex">Get started ${icon('arrow-right')}</a>
      <button type="button" data-drawer-open aria-label="Open menu" class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)] lg:hidden">${icon('menu')}</button>
    </div>
  </div>
</header>

<div data-drawer aria-hidden="true" class="fixed inset-0 z-[60] hidden lg:hidden">
  <div class="absolute inset-0 bg-ink-950/50 backdrop-blur-sm" data-drawer-close></div>
  <nav class="absolute right-0 top-0 h-full w-[82%] max-w-sm bg-[var(--surface-raised)] p-6 shadow-2xl" aria-label="Mobile navigation">
    <div class="mb-8 flex items-center justify-between">
      <span class="font-display text-lg font-semibold">Menu</span>
      <button type="button" data-drawer-close aria-label="Close menu" class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)]">${icon('x')}</button>
    </div>
    <ul class="space-y-1">
      ${menu.map(([l, h]) => `<li><a href="${h}" class="flex items-center justify-between rounded-xl px-4 py-3 text-base font-medium transition hover:bg-brand-500/10">${l}${icon('arrow-up-right', 'text-muted')}</a></li>`).join('')}
    </ul>
    <a href="#cta" class="btn btn-primary mt-8 w-full">Get started</a>
  </nav>
</div>

<main id="main">

<section class="relative overflow-hidden pt-16 pb-24 lg:pt-24 lg:pb-32">
  <div class="grid-backdrop pointer-events-none absolute inset-0 -z-10 opacity-60"></div>
  <div class="blob -z-10 size-[28rem] bg-brand-500 -top-24 -left-24 float"></div>
  <div class="blob -z-10 size-[24rem] bg-accent-500 top-10 right-0 float [animation-delay:-3s]"></div>
  <div class="container-page grid items-center gap-16 lg:grid-cols-2">
    <div>
      <span class="eyebrow" data-anim-hero>${icon('sparkles', 'text-accent-500')} New — version 2.0 is out</span>
      <h1 class="mt-6 font-display text-4xl leading-[1.08] font-semibold sm:text-5xl lg:text-6xl" data-anim-hero>Turn your idea into a <span class="text-gradient">lightning fast website</span></h1>
      <p class="mt-6 max-w-xl text-lg text-muted" data-anim-hero>The power of Laravel 13, the flexibility of Tailwind CSS 4 and the motion of GSAP — all in one clean, fully optimized codebase.</p>
      <div class="mt-9 flex flex-wrap items-center gap-3" data-anim-hero>
        <a href="#cta" class="btn btn-primary">Start for free ${icon('arrow-right')}</a>
        <a href="#features" class="btn btn-ghost">${icon('code-2')} Explore features</a>
      </div>
      <dl class="mt-12 grid max-w-md grid-cols-3 gap-6" data-anim-hero>
        ${[['99', 'Lighthouse score', ''], ['12', 'Thousand installs', '+'], ['24', 'Hour support', '+']]
            .map(([n, l, s]) => `<div><dt class="font-display text-3xl font-semibold text-brand-600 dark:text-brand-300"><span data-count="${n}">0</span>${s}</dt><dd class="mt-1 text-xs text-muted">${l}</dd></div>`).join('')}
      </dl>
    </div>
    <div class="relative" data-anim="zoom" data-parallax="-8">
      <div class="card overflow-hidden p-0">
        <div class="flex items-center gap-2 border-b border-[var(--surface-border)] px-5 py-3.5">
          <span class="size-3 rounded-full bg-danger/80"></span><span class="size-3 rounded-full bg-warning/80"></span><span class="size-3 rounded-full bg-success/80"></span>
          <span class="ml-3 font-mono text-xs text-muted">resources/views/frontend/index.blade.php</span>
        </div>
        <pre class="overflow-x-auto p-5 font-mono text-[13px] leading-relaxed"><code><span class="text-muted">@extends</span>('frontend.layouts.master')

<span class="text-muted">@section</span>('content')
    <span class="text-brand-600 dark:text-brand-300">@include</span>('frontend.sections.hero')
    <span class="text-brand-600 dark:text-brand-300">@include</span>('frontend.sections.features')
    <span class="text-brand-600 dark:text-brand-300">@include</span>('frontend.sections.pricing')
<span class="text-muted">@endsection</span></code></pre>
        <div class="flex items-center justify-between border-t border-[var(--surface-border)] px-5 py-4">
          <span class="flex items-center gap-2 text-sm text-success">${icon('check')} Build succeeded in 0.8s</span>${icon('gauge', 'text-muted')}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="border-y border-[var(--surface-border)] py-10">
  <div class="container-page">
    <p class="text-center text-xs font-medium tracking-[0.2em] uppercase text-muted">Built on modern technology</p>
    <div class="relative mt-7 overflow-hidden [mask-image:linear-gradient(90deg,transparent,#000_12%,#000_88%,transparent)]">
      <div class="marquee">${['Laravel', 'Tailwind', 'GSAP', 'Lucide', 'Vite', 'Alpine', 'Livewire', 'Laravel', 'Tailwind', 'GSAP', 'Lucide', 'Vite', 'Alpine', 'Livewire']
          .map((b) => `<span class="font-display text-xl font-medium text-muted opacity-70 whitespace-nowrap">${b}</span>`).join('')}</div>
    </div>
  </div>
</section>

<section id="features" class="section scroll-mt-24">
  <div class="container-page">
    <div class="mx-auto max-w-2xl text-center">
      <span class="eyebrow" data-anim="fade-up">${icon('layers')} Features</span>
      <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">Everything a website needs, <span class="text-gradient">already included</span></h2>
      <p class="mt-4 text-muted" data-anim="fade-up" data-anim-delay="0.1">Skip the blank page and build on a production ready foundation.</p>
    </div>
    <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      ${features.map(([i, t, d], n) => `<article class="card group" data-anim="fade-up" data-anim-delay="${0.05 * (n % 3)}">
        <span class="grid size-12 place-items-center rounded-2xl bg-brand-500/10 text-brand-600 transition group-hover:bg-brand-600 group-hover:text-white dark:text-brand-300">${icon(i)}</span>
        <h3 class="mt-5 text-lg font-semibold">${t}</h3><p class="mt-2 text-sm text-muted">${d}</p></article>`).join('')}
    </div>
  </div>
</section>

<section id="how" class="section scroll-mt-24 border-y border-[var(--surface-border)] bg-[var(--surface-raised)]">
  <div class="container-page">
    <div class="grid gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
      <div class="lg:sticky lg:top-28">
        <span class="eyebrow" data-anim="left">${icon('rocket')} How it works</span>
        <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="left" data-anim-delay="0.05">From zero to a <span class="text-gradient">live website</span> in four steps</h2>
        <p class="mt-4 max-w-md text-muted" data-anim="left" data-anim-delay="0.1">No complicated configuration — just a simple, clear and repeatable workflow.</p>
        <a href="#cta" class="btn btn-primary mt-8" data-anim="left" data-anim-delay="0.15">Get started now ${icon('arrow-right')}</a>
      </div>
      <ol class="relative space-y-5 border-l border-dashed border-[var(--surface-border)] pl-8">
        ${steps.map(([no, t, d], n) => `<li class="relative" data-anim="fade-up" data-anim-delay="${0.06 * n}">
          <span class="absolute -left-[2.85rem] grid size-8 place-items-center rounded-full bg-brand-600 font-mono text-xs font-semibold text-white">${n + 1}</span>
          <div class="card"><p class="font-mono text-xs text-brand-600 dark:text-brand-300">${no}</p><h3 class="mt-1 text-lg font-semibold">${t}</h3><p class="mt-2 text-sm text-muted">${d}</p></div></li>`).join('')}
      </ol>
    </div>
  </div>
</section>

<section class="section border-y border-[var(--surface-border)] bg-[var(--surface-raised)]">
  <div class="container-page">
    <div class="mx-auto max-w-2xl text-center">
      <span class="eyebrow" data-anim="fade-up">${icon('quote')} Testimonials</span>
      <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">What the people using it <span class="text-gradient">have to say</span></h2>
    </div>
    <div class="mt-14 grid gap-6 lg:grid-cols-3">
      ${reviews.map(([name, role, text], n) => `<figure class="card flex h-full flex-col" data-anim="fade-up" data-anim-delay="${0.07 * n}">
        <div class="flex gap-0.5 text-accent-500">${icon('star').repeat(5)}</div>
        <blockquote class="mt-5 flex-1 text-[15px] leading-relaxed text-muted">&ldquo;${text}&rdquo;</blockquote>
        <figcaption class="mt-6 flex items-center gap-3 border-t border-[var(--surface-border)] pt-5">
          <span class="grid size-11 place-items-center rounded-full bg-brand-500/15 font-display font-semibold text-brand-600 dark:text-brand-300">${name[0]}</span>
          <span><span class="block text-sm font-semibold">${name}</span><span class="block text-xs text-muted">${role}</span></span>
        </figcaption></figure>`).join('')}
    </div>
  </div>
</section>

<section id="pricing" class="section scroll-mt-24">
  <div class="container-page">
    <div class="mx-auto max-w-2xl text-center">
      <span class="eyebrow" data-anim="fade-up">${icon('star')} Pricing</span>
      <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">Simple and <span class="text-gradient">transparent pricing</span></h2>
      <p class="mt-4 text-muted" data-anim="fade-up" data-anim-delay="0.1">No hidden fees. Cancel any time.</p>
    </div>
    <div class="mt-16 grid gap-6 lg:grid-cols-3 lg:items-center">
      ${plans.map(([name, price, period, featured, desc, items], n) => `<div class="card relative flex flex-col${featured ? ' lg:scale-[1.04] border-brand-500/60 shadow-glow' : ''}" data-anim="fade-up" data-anim-delay="${0.07 * n}">
        ${featured ? '<span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-accent-500 px-3 py-1 text-xs font-semibold text-ink-950">Most popular</span>' : ''}
        <h3 class="text-lg font-semibold">${name}</h3><p class="mt-1 text-sm text-muted">${desc}</p>
        <p class="mt-6 flex items-end gap-1"><span class="font-display text-4xl font-semibold">${price}</span>${period ? `<span class="pb-1 text-sm text-muted">/ ${period}</span>` : ''}</p>
        <ul class="mt-6 flex-1 space-y-3 text-sm">${items.map((i) => `<li class="flex items-start gap-2.5">${icon('check', 'mt-0.5 shrink-0 text-success')}<span class="text-muted">${i}</span></li>`).join('')}</ul>
        <a href="#cta" class="btn mt-8 w-full ${featured ? 'btn-primary' : 'btn-ghost'}">${price === 'Custom' ? 'Contact sales' : 'Choose plan'}</a></div>`).join('')}
    </div>
  </div>
</section>

<section id="faq" class="section scroll-mt-24">
  <div class="container-page grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
    <div>
      <span class="eyebrow" data-anim="left">${icon('chevron-down')} FAQ</span>
      <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="left" data-anim-delay="0.05">Frequently asked <span class="text-gradient">questions</span></h2>
      <p class="mt-4 text-muted" data-anim="left" data-anim-delay="0.1">Can&rsquo;t find your answer? Get in touch and we&rsquo;ll reply within 24 hours.</p>
    </div>
    <div data-accordion class="divide-y divide-[var(--surface-border)] border-y border-[var(--surface-border)]">
      ${faqs.map(([q, a], n) => `<div data-accordion-item class="group py-1" data-anim="fade-up" data-anim-delay="${0.04 * n}">
        <button type="button" aria-expanded="false" class="flex w-full items-center justify-between gap-4 py-5 text-left font-medium transition hover:text-brand-600"><span>${q}</span>${icon('chevron-down', 'shrink-0 text-muted transition-transform duration-300 group-[.is-open]:rotate-180')}</button>
        <div data-accordion-panel style="max-height:0" class="overflow-hidden transition-[max-height] duration-400 ease-[cubic-bezier(0.22,1,0.36,1)]"><p class="pb-5 pr-8 text-sm leading-relaxed text-muted">${a}</p></div></div>`).join('')}
    </div>
  </div>
</section>

<section id="cta" class="section scroll-mt-24">
  <div class="container-page">
    <div class="relative overflow-hidden rounded-[var(--radius-card)] bg-brand-700 px-6 py-16 text-center text-white sm:px-14 lg:py-20" data-anim="zoom">
      <div class="blob size-80 bg-accent-500 -top-16 -left-10 opacity-50"></div>
      <div class="blob size-80 bg-brand-300 -bottom-20 -right-10 opacity-50"></div>
      <div class="relative mx-auto max-w-2xl">
        <span class="eyebrow border-white/25 text-white/80">${icon('sparkles')} Start today</span>
        <h2 class="mt-6 font-display text-3xl font-semibold sm:text-4xl lg:text-5xl">Your next website starts right here</h2>
        <p class="mt-5 text-white/75">No credit card required. 14 day free trial, cancel any time.</p>
        <form class="mx-auto mt-9 flex max-w-md flex-col gap-3 sm:flex-row" onsubmit="return false">
          <input type="email" required placeholder="Enter your email" class="w-full rounded-full border border-white/25 bg-white/10 px-5 py-3 text-sm text-white placeholder:text-white/60 focus:border-white focus:outline-none">
          <button type="submit" class="btn btn-accent shrink-0">Start free trial ${icon('arrow-right')}</button>
        </form>
        <p class="mt-5 flex items-center justify-center gap-2 text-xs text-white/65">${icon('shield-check')} Your data stays private and secure</p>
      </div>
    </div>
  </div>
</section>

</main>

<footer class="border-t border-[var(--surface-border)] bg-[var(--surface-raised)]">
  <div class="container-page py-16">
    <div class="grid gap-12 lg:grid-cols-[1.4fr_repeat(3,1fr)]">
      <div data-anim="fade-up">
        <a href="/" class="flex items-center gap-2.5 font-display text-lg font-semibold"><span class="grid size-9 place-items-center rounded-xl bg-brand-600 text-white">${icon('blocks')}</span>SixCMS</a>
        <p class="mt-4 max-w-xs text-sm text-muted">A modern, high performance content platform built with Laravel 13, Tailwind CSS 4 and GSAP.</p>
        <div class="mt-6 flex gap-2">${['message-circle', 'send', 'rss', 'mail'].map((s) => `<a href="#" aria-label="${s}" class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)] text-muted transition hover:border-brand-500 hover:text-brand-600">${icon(s)}</a>`).join('')}</div>
      </div>
      ${Object.entries(columns).map(([h, links], n) => `<div data-anim="fade-up" data-anim-delay="${0.08 * (n + 1)}">
        <h3 class="text-sm font-semibold tracking-wide uppercase">${h}</h3>
        <ul class="mt-4 space-y-3 text-sm">${links.map((l) => `<li><a href="#" class="text-muted transition hover:text-brand-600">${l}</a></li>`).join('')}</ul></div>`).join('')}
    </div>
    <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-[var(--surface-border)] pt-8 text-sm text-muted sm:flex-row">
      <p>&copy; ${new Date().getFullYear()} SixCMS. All rights reserved.</p>
      <p class="flex items-center gap-2">${icon('zap', 'text-accent-500')} Built with Laravel 13</p>
    </div>
  </div>
</footer>

</body>
</html>
`;

mkdirSync('public/preview', { recursive: true });
// so the preview folder can be served directly as a web root
try { symlinkSync('../build', 'public/preview/build', 'dir'); } catch { /* already exists */ }
writeFileSync('public/preview/index.html', html);
console.log('✓ public/preview/index.html generated');
