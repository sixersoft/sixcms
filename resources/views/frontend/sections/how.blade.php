@php
    $steps = [
        ['no' => '01', 'title' => 'Install the project', 'text' => 'Run composer install and npm install — your environment is ready in a minute.'],
        ['no' => '02', 'title' => 'Customize the theme', 'text' => 'Change colors and fonts in theme.css and the whole site updates instantly.'],
        ['no' => '03', 'title' => 'Add your content',    'text' => 'Drop your copy and images into the Blade sections. No complexity involved.'],
        ['no' => '04', 'title' => 'Go live',             'text' => 'Run npm run build, upload to your server and your site is online.'],
    ];
@endphp

<section id="how" class="section scroll-mt-24 border-y border-[var(--surface-border)] bg-[var(--surface-raised)]">
    <div class="container-page">
        <div class="grid gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div class="lg:sticky lg:top-28">
                <span class="eyebrow" data-anim="left"><i data-lucide="rocket"></i> How it works</span>
                <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="left" data-anim-delay="0.05">
                    From zero to a <span class="text-gradient">live website</span> in four steps
                </h2>
                <p class="mt-4 max-w-md text-muted" data-anim="left" data-anim-delay="0.1">
                    No complicated configuration — just a simple, clear and repeatable workflow.
                </p>
                <a href="#cta" class="btn btn-primary mt-8" data-anim="left" data-anim-delay="0.15">
                    Get started now <i data-lucide="arrow-right"></i>
                </a>
            </div>

            <ol class="relative space-y-5 border-l border-dashed border-[var(--surface-border)] pl-8">
                @foreach ($steps as $step)
                    <li class="relative" data-anim="fade-up" data-anim-delay="{{ 0.06 * $loop->index }}">
                        <span class="absolute -left-[2.85rem] grid size-8 place-items-center rounded-full bg-brand-600 font-mono text-xs font-semibold text-white">
                            {{ $loop->iteration }}
                        </span>
                        <div class="card">
                            <p class="font-mono text-xs text-brand-600 dark:text-brand-300">{{ $step['no'] }}</p>
                            <h3 class="mt-1 text-lg font-semibold">{{ $step['title'] }}</h3>
                            <p class="mt-2 text-sm text-muted">{{ $step['text'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
