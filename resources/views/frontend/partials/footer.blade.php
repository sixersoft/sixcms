@php
    $columns = [
        'প্রোডাক্ট'  => ['ফিচার' => '#features', 'প্রাইসিং' => '#pricing', 'ইন্টিগ্রেশন' => '#', 'চেঞ্জলগ' => '#'],
        'রিসোর্স'   => ['ডকুমেন্টেশন' => '#', 'ব্লগ' => '#', 'গাইড' => '#', 'সাপোর্ট' => '#'],
        'কোম্পানি'  => ['আমাদের সম্পর্কে' => '#', 'ক্যারিয়ার' => '#', 'যোগাযোগ' => '#', 'প্রাইভেসি' => '#'],
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
                    Laravel 13, Tailwind CSS 4 ও GSAP দিয়ে তৈরি একটি আধুনিক, দ্রুতগতির কনটেন্ট প্ল্যাটফর্ম।
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
            <p>&copy; {{ now()->year }} {{ config('app.name', 'SixCMS') }}। সর্বস্বত্ব সংরক্ষিত।</p>
            <p class="flex items-center gap-2">
                <i data-lucide="zap" class="text-accent-500"></i>
                Laravel {{ app()->version() }} দিয়ে তৈরি
            </p>
        </div>
    </div>
</footer>
