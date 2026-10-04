@php
    $menu = [
        ['label' => 'ফিচার',    'href' => '#features'],
        ['label' => 'কীভাবে কাজ করে', 'href' => '#how'],
        ['label' => 'প্রাইসিং',  'href' => '#pricing'],
        ['label' => 'প্রশ্নোত্তর', 'href' => '#faq'],
    ];
@endphp

<header data-header
        class="sticky top-0 z-50 border-b border-transparent transition-all duration-300
               [&.is-stuck]:border-[var(--surface-border)] [&.is-stuck]:glass [&.is-stuck]:shadow-soft">
    <div class="container-page flex h-16 items-center justify-between gap-6 lg:h-20">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-2.5 font-display text-lg font-semibold">
            <span class="grid size-9 place-items-center rounded-xl bg-brand-600 text-white shadow-glow">
                <i data-lucide="blocks"></i>
            </span>
            <span>{{ config('app.name', 'SixCMS') }}</span>
        </a>

        {{-- Desktop nav --}}
        <nav class="hidden items-center gap-1 lg:flex" aria-label="প্রধান মেনু">
            @foreach ($menu as $item)
                <a href="{{ $item['href'] }}"
                   class="rounded-full px-4 py-2 text-sm font-medium text-muted transition
                          hover:bg-brand-500/10 hover:text-brand-600 dark:hover:text-brand-300">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        {{-- Actions --}}
        <div class="flex items-center gap-2">
            <button type="button" data-theme-toggle aria-label="থিম পরিবর্তন"
                    class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)] transition hover:bg-brand-500/10">
                <i data-lucide="sun" class="hidden dark:block"></i>
                <i data-lucide="moon" class="dark:hidden"></i>
            </button>

            <a href="#cta" class="btn btn-primary hidden sm:inline-flex">
                শুরু করুন <i data-lucide="arrow-right"></i>
            </a>

            <button type="button" data-drawer-open aria-label="মেনু খুলুন"
                    class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)] lg:hidden">
                <i data-lucide="menu"></i>
            </button>
        </div>
    </div>
</header>

{{-- Mobile drawer --}}
<div data-drawer aria-hidden="true"
     class="fixed inset-0 z-[60] hidden lg:hidden">
    <div class="absolute inset-0 bg-ink-950/50 backdrop-blur-sm" data-drawer-close></div>

    <nav class="absolute right-0 top-0 h-full w-[82%] max-w-sm bg-[var(--surface-raised)] p-6 shadow-2xl"
         aria-label="মোবাইল মেনু">
        <div class="mb-8 flex items-center justify-between">
            <span class="font-display text-lg font-semibold">মেনু</span>
            <button type="button" data-drawer-close aria-label="মেনু বন্ধ করুন"
                    class="grid size-10 place-items-center rounded-full border border-[var(--surface-border)]">
                <i data-lucide="x"></i>
            </button>
        </div>

        <ul class="space-y-1">
            @foreach ($menu as $item)
                <li>
                    <a href="{{ $item['href'] }}"
                       class="flex items-center justify-between rounded-xl px-4 py-3 text-base font-medium transition hover:bg-brand-500/10">
                        {{ $item['label'] }}
                        <i data-lucide="arrow-up-right" class="text-muted"></i>
                    </a>
                </li>
            @endforeach
        </ul>

        <a href="#cta" class="btn btn-primary mt-8 w-full">শুরু করুন</a>
    </nav>
</div>
