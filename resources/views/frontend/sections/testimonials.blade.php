@php
    $reviews = [
        ['name' => 'Arif Islam',   'role' => 'Full-stack developer', 'text' => 'The structure is so clean that adding a new section takes less than a minute. The GSAP integration is brilliant.'],
        ['name' => 'Nusrat Jahan', 'role' => 'UI designer',          'text' => 'I rebranded the entire site just by editing the theme tokens. A dream setup for designers.'],
        ['name' => 'Tanvir Hasan', 'role' => 'Agency founder',       'text' => 'Our client sites load twice as fast now and the performance score never drops below 98.'],
    ];
@endphp

<section class="section border-y border-[var(--surface-border)] bg-[var(--surface-raised)]">
    <div class="container-page">
        <div class="mx-auto max-w-2xl text-center">
            <span class="eyebrow" data-anim="fade-up"><i data-lucide="quote"></i> Testimonials</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">
                What the people using it <span class="text-gradient">have to say</span>
            </h2>
        </div>

        <div class="mt-14 grid gap-6 lg:grid-cols-3">
            @foreach ($reviews as $review)
                <figure class="card flex h-full flex-col" data-anim="fade-up" data-anim-delay="{{ 0.07 * $loop->index }}">
                    <div class="flex gap-0.5 text-accent-500">
                        @for ($i = 0; $i < 5; $i++)
                            <i data-lucide="star"></i>
                        @endfor
                    </div>

                    <blockquote class="mt-5 flex-1 text-[15px] leading-relaxed text-muted">
                        &ldquo;{{ $review['text'] }}&rdquo;
                    </blockquote>

                    <figcaption class="mt-6 flex items-center gap-3 border-t border-[var(--surface-border)] pt-5">
                        <span class="grid size-11 place-items-center rounded-full bg-brand-500/15 font-display font-semibold text-brand-600 dark:text-brand-300">
                            {{ mb_substr($review['name'], 0, 1) }}
                        </span>
                        <span>
                            <span class="block text-sm font-semibold">{{ $review['name'] }}</span>
                            <span class="block text-xs text-muted">{{ $review['role'] }}</span>
                        </span>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>
