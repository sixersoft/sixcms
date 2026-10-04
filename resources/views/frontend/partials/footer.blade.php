@php
    $columns = [
        'Product'  => ['Features' => '#features', 'Pricing' => '#pricing', 'Integrations' => '#', 'Changelog' => '#'],
        'Resources' => ['Documentation' => '#', 'Blog' => '#', 'Guides' => '#', 'Support' => '#'],
        'Company'  => ['About' => '#', 'Careers' => '#', 'Contact' => '#', 'Privacy' => '#'],
    ];
@endphp

<footer class="border-t border-[var(--surface-border)] bg-[var(--surface-raised)]">
    <div class="container-page py-16">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_repeat(3,1fr)]">

            <div data-anim="fade-up">
                <a href="{{ url('/') }}" class="flex items-center gap-2.5 font-display text-lg font-semibold">
                    <span class="grid size-9 place-items-center rounded-xl bg-brand-600 text-white">
                        <i data-lucide="blocks"></i>
                    </span>
                    {{ config('app.name', 'SixCMS') }}
                </a>

                <p class="mt-4 max-w-xs text-sm text-muted">
                    A modern, high performance content platform built with Laravel 13, Tailwind CSS 4 and GSAP.
                </p>

                <div class="mt-6 flex gap-2">
                    @foreach (['message-circle', 'send', 'rss', 'mail'] as $social)
                        <a href="#" aria-label="{{ $social }}"
                           class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)] text-muted transition hover:border-brand-500 hover:text-brand-600">
                            <i data-lucide="{{ $social }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            @foreach ($columns as $heading => $links)
                <div data-anim="fade-up" data-anim-delay="{{ 0.08 * $loop->iteration }}">
                    <h3 class="text-sm font-semibold tracking-wide uppercase">{{ $heading }}</h3>
                    <ul class="mt-4 space-y-3 text-sm">
                        @foreach ($links as $label => $href)
                            <li>
                                <a href="{{ $href }}" class="text-muted transition hover:text-brand-600">{{ $label }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="mt-14 flex flex-col items-center justify-between gap-4 border-t border-[var(--surface-border)] pt-8 text-sm text-muted sm:flex-row">
            <p>&copy; {{ now()->year }} {{ config('app.name', 'SixCMS') }}. All rights reserved.</p>
            <p class="flex items-center gap-2">
                <i data-lucide="zap" class="text-accent-500"></i>
                Built with Laravel {{ app()->version() }}
            </p>
        </div>
    </div>
</footer>
