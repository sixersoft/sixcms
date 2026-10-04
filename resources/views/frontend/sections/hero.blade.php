<section class="relative overflow-hidden pt-16 pb-24 lg:pt-24 lg:pb-32">
    {{-- Background decoration --}}
    <div class="grid-backdrop pointer-events-none absolute inset-0 -z-10 opacity-60" aria-hidden="true"></div>
    <div class="blob -z-10 size-[28rem] bg-brand-500 -top-24 -left-24 float" aria-hidden="true"></div>
    <div class="blob -z-10 size-[24rem] bg-accent-500 top-10 right-0 float [animation-delay:-3s]" aria-hidden="true"></div>

    <div class="container-page grid items-center gap-16 lg:grid-cols-2">
        <div>
            <span class="eyebrow" data-anim-hero>
                <i data-lucide="sparkles" class="text-accent-500"></i>
                New — version 2.0 is out
            </span>

            <h1 class="mt-6 font-display text-4xl leading-[1.08] font-semibold sm:text-5xl lg:text-6xl" data-anim-hero>
                Turn your idea into a <span class="text-gradient">lightning fast website</span>
            </h1>

            <p class="mt-6 max-w-xl text-lg text-muted" data-anim-hero>
                The power of Laravel 13, the flexibility of Tailwind CSS 4 and the motion of GSAP —
                all in one clean, fully optimized codebase.
            </p>

            <div class="mt-9 flex flex-wrap items-center gap-3" data-anim-hero>
                <a href="#cta" class="btn btn-primary">
                    Start for free <i data-lucide="arrow-right"></i>
                </a>
                <a href="#features" class="btn btn-ghost">
                    <i data-lucide="code-2"></i> Explore features
                </a>
            </div>

            <dl class="mt-12 grid max-w-md grid-cols-3 gap-6" data-anim-hero>
                @foreach ([['99', 'Lighthouse score'], ['12', 'Thousand installs'], ['24', 'Hour support']] as [$num, $label])
                    <div>
                        <dt class="font-display text-3xl font-semibold text-brand-600 dark:text-brand-300">
                            <span data-count="{{ $num }}">0</span>{{ $loop->first ? '' : '+' }}
                        </dt>
                        <dd class="mt-1 text-xs text-muted">{{ $label }}</dd>
                    </div>
                @endforeach
            </dl>
        </div>

        {{-- Code preview card --}}
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
                        <i data-lucide="check"></i> Build succeeded in 0.8s
                    </span>
                    <i data-lucide="gauge" class="text-muted"></i>
                </div>
            </div>
        </div>
    </div>
</section>
