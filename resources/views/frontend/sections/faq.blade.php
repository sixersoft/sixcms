@php
    $faqs = [
        ['q' => 'What do I need to run it?',        'a' => 'PHP 8.3+, Composer and Node.js 20+. Then simply run composer install and npm install.'],
        ['q' => 'How do I change colors or fonts?', 'a' => 'Edit the @theme block in resources/css/partials/theme.css — the change is applied across the entire site automatically.'],
        ['q' => 'Can I add more icons?',            'a' => 'Yes. Import the icon from Lucide in resources/js/modules/icons.js, add it to the object, then use data-lucide="icon-name" in your Blade markup.'],
        ['q' => 'Can animations be disabled?',      'a' => 'All animations switch off automatically when the browser requests reduced motion. You can also simply remove the data-anim attribute.'],
        ['q' => 'Is dark mode included?',           'a' => 'Yes — automatic based on system preference plus a manual toggle in the header, with the choice stored in localStorage.'],
    ];
@endphp

<section id="faq" class="section scroll-mt-24">
    <div class="container-page grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
        <div>
            <span class="eyebrow" data-anim="left"><i data-lucide="chevron-down"></i> FAQ</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="left" data-anim-delay="0.05">
                Frequently asked <span class="text-gradient">questions</span>
            </h2>
            <p class="mt-4 text-muted" data-anim="left" data-anim-delay="0.1">
                Can&rsquo;t find your answer? Get in touch and we&rsquo;ll reply within 24 hours.
            </p>
        </div>

        <div data-accordion class="divide-y divide-[var(--surface-border)] border-y border-[var(--surface-border)]">
            @foreach ($faqs as $faq)
                <div data-accordion-item class="group py-1" data-anim="fade-up" data-anim-delay="{{ 0.04 * $loop->index }}">
                    <button type="button" aria-expanded="false"
                            class="flex w-full items-center justify-between gap-4 py-5 text-left font-medium transition hover:text-brand-600">
                        <span>{{ $faq['q'] }}</span>
                        <i data-lucide="chevron-down"
                           class="shrink-0 text-muted transition-transform duration-300 group-[.is-open]:rotate-180"></i>
                    </button>

                    <div data-accordion-panel style="max-height:0"
                         class="overflow-hidden transition-[max-height] duration-400 ease-[cubic-bezier(0.22,1,0.36,1)]">
                        <p class="pb-5 pr-8 text-sm leading-relaxed text-muted">{{ $faq['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
