@php
    $features = $features ?? [
        ['icon' => 'zap',          'title' => 'Lightning performance', 'text' => 'Vite builds, lazy loading and optimized assets keep every page under a second.'],
        ['icon' => 'layers',       'title' => 'Clean components',      'text' => 'Blade layouts, partials and sections — change any piece in isolation.'],
        ['icon' => 'sparkles',     'title' => 'GSAP animations',       'text' => 'Just add a data-anim attribute to get scroll reveals, counters and parallax.'],
        ['icon' => 'shield-check', 'title' => 'Security first',        'text' => 'CSRF and XSS protection with the latest Laravel 13 security defaults.'],
        ['icon' => 'globe',        'title' => 'SEO & i18n ready',      'text' => 'Open Graph tags, canonical URLs and semantic HTML out of the box.'],
        ['icon' => 'rocket',       'title' => 'Effortless deploys',    'text' => 'One command to build, then ship to any host or VPS in minutes.'],
    ];
@endphp

<section id="features" class="section scroll-mt-24">
    <div class="container-page">
        <div class="mx-auto max-w-2xl text-center">
            <span class="eyebrow" data-anim="fade-up"><i data-lucide="layers"></i> Features</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">
                Everything a website needs, <span class="text-gradient">already included</span>
            </h2>
            <p class="mt-4 text-muted" data-anim="fade-up" data-anim-delay="0.1">
                Skip the blank page and build on a production ready foundation.
            </p>
        </div>

        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $feature)
                <article class="card group" data-anim="fade-up" data-anim-delay="{{ 0.05 * ($loop->index % 3) }}">
                    <span class="grid size-12 place-items-center rounded-2xl bg-brand-500/10 text-brand-600 transition group-hover:bg-brand-600 group-hover:text-white dark:text-brand-300">
                        <i data-lucide="{{ $feature['icon'] }}"></i>
                    </span>
                    <h3 class="mt-5 text-lg font-semibold">{{ $feature['title'] }}</h3>
                    <p class="mt-2 text-sm text-muted">{{ $feature['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
