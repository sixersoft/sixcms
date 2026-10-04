<section class="relative overflow-hidden pt-16 pb-24 lg:pt-24 lg:pb-32">
    {{-- ব্যাকগ্রাউন্ড ডেকোরেশন --}}
    <div class="grid-backdrop pointer-events-none absolute inset-0 -z-10 opacity-60" aria-hidden="true"></div>
    <div class="blob -z-10 size-[28rem] bg-brand-500 -top-24 -left-24 float" aria-hidden="true"></div>
    <div class="blob -z-10 size-[24rem] bg-accent-500 top-10 right-0 float [animation-delay:-3s]" aria-hidden="true"></div>

    <div class="container-page grid items-center gap-16 lg:grid-cols-2">
        <div>
            <span class="eyebrow" data-anim-hero>
                <i data-lucide="sparkles" class="text-accent-500"></i>
                নতুন — সংস্করণ ২.০ প্রকাশিত
            </span>

            <h1 class="mt-6 font-display text-4xl leading-[1.08] font-semibold sm:text-5xl lg:text-6xl" data-anim-hero>
                আপনার আইডিয়াকে <span class="text-gradient">দ্রুতগতির ওয়েবসাইটে</span> রূপ দিন
            </h1>

            <p class="mt-6 max-w-xl text-lg text-muted" data-anim-hero>
                Laravel 13-এর শক্তি, Tailwind CSS 4-এর নমনীয়তা আর GSAP-এর প্রাণবন্ত অ্যানিমেশন —
                সব একসাথে, একটি পরিচ্ছন্ন ও অপ্টিমাইজড কোডবেসে।
            </p>

            <div class="mt-9 flex flex-wrap items-center gap-3" data-anim-hero>
                <a href="#cta" class="btn btn-primary">
                    বিনামূল্যে শুরু করুন <i data-lucide="arrow-right"></i>
                </a>
                <a href="#features" class="btn btn-ghost">
                    <i data-lucide="code-2"></i> ফিচার দেখুন
                </a>
            </div>

            <dl class="mt-12 grid max-w-md grid-cols-3 gap-6" data-anim-hero>
                @foreach ([['99', 'পারফরম্যান্স স্কোর'], ['12', 'হাজার+ ইনস্টল'], ['24', 'ঘণ্টা সাপোর্ট']] as [$num, $label])
                    <div>
                        <dt class="font-display text-3xl font-semibold text-brand-600 dark:text-brand-300">
                            <span data-count="{{ $num }}">0</span>{{ $loop->first ? '' : '+' }}
                        </dt>
                        <dd class="mt-1 text-xs text-muted">{{ $label }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>

        {{-- প্রিভিউ কার্ড --}}
        <div class="relative" data-anim="zoom" data-parallax="-8">
            <div class="card overflow-hidden p-0">
                <div class="flex items-center gap-2 border-b border-[var(--surface-border)] px-5 py-3.5">
                    <span class="size-3 rounded-full bg-danger/80"></span>
                    <span class="size-3 rounded-full bg-warning/80"></span>
                    <span class="size-3 rounded-full bg-success/80"></span>
                    <span class="ml-3 font-mono text-xs text-muted">resources/views/frontend/index.blade.php</span>
                </div>

                <pre class="overflow-x-auto p-5 font-mono text-[13px] leading-relaxed"><code>@verbatim<span class="text-muted">@extends</span>('frontend.layouts.master')

<span class="text-muted">@section</span>('content')
    <span class="text-brand-600 dark:text-brand-300">@include</span>('frontend.sections.hero')
    <span class="text-brand-600 dark:text-brand-300">@include</span>('frontend.sections.features')
    <span class="text-brand-600 dark:text-brand-300">@include</span>('frontend.sections.pricing')
<span class="text-muted">@endsection</span>@endverbatim</code></pre>

                <div class="flex items-center justify-between border-t border-[var(--surface-border)] px-5 py-4">
                    <span class="flex items-center gap-2 text-sm text-success">
                        <i data-lucide="check"></i> বিল্ড সফল — ০.৮ সেকেন্ড
                    </span>
                    <i data-lucide="gauge" class="text-muted"></i>
                </div>
            </div>
        </div>
    </div>
</section>
