@php
    $faqs = [
        ['q' => 'এটি চালাতে কী কী লাগবে?',        'a' => 'PHP 8.3+, Composer এবং Node.js 20+। এরপর composer install ও npm install চালালেই হবে।'],
        ['q' => 'রং বা ফন্ট কীভাবে বদলাব?',      'a' => 'resources/css/partials/theme.css ফাইলের @theme ব্লকে ভ্যালু পরিবর্তন করুন — পুরো সাইটে স্বয়ংক্রিয়ভাবে প্রয়োগ হবে।'],
        ['q' => 'নতুন আইকন যোগ করা যাবে?',       'a' => 'হ্যাঁ। resources/js/modules/icons.js-এ Lucide থেকে আইকনটি import করে অবজেক্টে যোগ করুন, তারপর Blade-এ data-lucide="icon-name" লিখুন।'],
        ['q' => 'অ্যানিমেশন বন্ধ করা যায়?',      'a' => 'ব্রাউজারের "reduce motion" সেটিং চালু থাকলে সব অ্যানিমেশন স্বয়ংক্রিয়ভাবে বন্ধ হয়ে যায়। চাইলে data-anim অ্যাট্রিবিউট মুছে দিলেই হবে।'],
        ['q' => 'ডার্ক মোড কি অন্তর্ভুক্ত?',      'a' => 'হ্যাঁ, সিস্টেম প্রেফারেন্স অনুযায়ী অটো এবং হেডারের বাটন দিয়ে ম্যানুয়াল — পছন্দ localStorage-এ সংরক্ষিত থাকে।'],
    ];
@endphp

<section id="faq" class="section scroll-mt-24">
    <div class="container-page grid gap-12 lg:grid-cols-[0.8fr_1.2fr]">
        <div>
            <span class="eyebrow" data-anim="left"><i data-lucide="chevron-down"></i> প্রশ্নোত্তর</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="left" data-anim-delay="0.05">
                সাধারণ <span class="text-gradient">জিজ্ঞাসা</span>
            </h2>
            <p class="mt-4 text-muted" data-anim="left" data-anim-delay="0.1">
                উত্তর খুঁজে না পেলে আমাদের সাথে যোগাযোগ করুন — ২৪ ঘণ্টার মধ্যে উত্তর পাবেন।
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
