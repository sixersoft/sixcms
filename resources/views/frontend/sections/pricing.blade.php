@php
    $plans = [
        [
            'name' => 'Starter', 'price' => '$0', 'period' => 'month', 'featured' => false,
            'desc' => 'For personal projects and learning.',
            'items' => ['1 website', 'Core components', 'Community support', 'Monthly updates'],
        ],
        [
            'name' => 'Pro', 'price' => '$19', 'period' => 'month', 'featured' => true,
            'desc' => 'Best for freelancers and small agencies.',
            'items' => ['Unlimited websites', 'All premium sections', 'Premium GSAP presets', 'Priority support', 'SEO toolkit'],
        ],
        [
            'name' => 'Enterprise', 'price' => 'Custom', 'period' => null, 'featured' => false,
            'desc' => 'For larger teams with special needs.',
            'items' => ['Dedicated developer', 'Custom integrations', '24/7 support with SLA', 'On-premise deployment'],
        ],
    ];
@endphp

<section id="pricing" class="section scroll-mt-24">
    <div class="container-page">
        <div class="mx-auto max-w-2xl text-center">
            <span class="eyebrow" data-anim="fade-up"><i data-lucide="star"></i> Pricing</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">
                Simple and <span class="text-gradient">transparent pricing</span>
            </h2>
            <p class="mt-4 text-muted" data-anim="fade-up" data-anim-delay="0.1">No hidden fees. Cancel any time.</p>
        </div>

        <div class="mt-16 grid gap-6 lg:grid-cols-3 lg:items-center">
            @foreach ($plans as $plan)
                <div @class([
                        'card relative flex flex-col',
                        'lg:scale-[1.04] border-brand-500/60 shadow-glow' => $plan['featured'],
                     ])
                     data-anim="fade-up" data-anim-delay="{{ 0.07 * $loop->index }}">

                    @if ($plan['featured'])
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-accent-500 px-3 py-1 text-xs font-semibold text-ink-950">
                            Most popular
                        </span>
                    @endif

                    <h3 class="text-lg font-semibold">{{ $plan['name'] }}</h3>
                    <p class="mt-1 text-sm text-muted">{{ $plan['desc'] }}</p>

                    <p class="mt-6 flex items-end gap-1">
                        <span class="font-display text-4xl font-semibold">{{ $plan['price'] }}</span>
                        @if ($plan['period'])
                            <span class="pb-1 text-sm text-muted">/ {{ $plan['period'] }}</span>
                        @endif
                    </p>

                    <ul class="mt-6 flex-1 space-y-3 text-sm">
                        @foreach ($plan['items'] as $item)
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check" class="mt-0.5 shrink-0 text-success"></i>
                                <span class="text-muted">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="#cta" class="btn mt-8 w-full {{ $plan['featured'] ? 'btn-primary' : 'btn-ghost' }}">
                        {{ $plan['price'] === 'Custom' ? 'Contact sales' : 'Choose plan' }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
