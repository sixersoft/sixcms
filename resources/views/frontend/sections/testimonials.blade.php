@php
    $reviews = [
        ['name' => 'আরিফুল ইসলাম', 'role' => 'ফুল-স্ট্যাক ডেভেলপার', 'text' => 'কোড স্ট্রাকচার এত পরিষ্কার যে নতুন সেকশন যোগ করতে মিনিটও লাগে না। GSAP ইন্টিগ্রেশনটা দুর্দান্ত।'],
        ['name' => 'নুসরাত জাহান',  'role' => 'ইউআই ডিজাইনার',      'text' => 'থিম টোকেন বদলেই পুরো ব্র্যান্ড কালার পাল্টে ফেলেছি। ডিজাইনারের জন্য স্বপ্নের সেটআপ।'],
        ['name' => 'তানভীর হাসান',  'role' => 'এজেন্সি ফাউন্ডার',    'text' => 'ক্লায়েন্ট সাইটের লোড টাইম অর্ধেকে নেমে এসেছে। পারফরম্যান্স স্কোর ৯৮-এর নিচে নামে না।'],
    ];
@endphp

<section class="section border-y border-[var(--surface-border)] bg-[var(--surface-raised)]">
    <div class="container-page">
        <div class="mx-auto max-w-2xl text-center">
            <span class="eyebrow" data-anim="fade-up"><i data-lucide="quote"></i> গ্রাহকের মতামত</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">
                যারা ব্যবহার করছেন, <span class="text-gradient">তারা কী বলছেন</span>
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
                        “{{ $review['text'] }}”
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
