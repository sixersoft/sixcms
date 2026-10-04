@php
    $features = $features ?? [
        ['icon' => 'zap',          'title' => 'বিদ্যুৎগতির পারফরম্যান্স', 'text' => 'Vite বিল্ড, ল্যাজি লোডিং ও অপ্টিমাইজড অ্যাসেট — প্রতিটি পেজ এক সেকেন্ডের মধ্যে লোড হয়।'],
        ['icon' => 'layers',       'title' => 'পরিচ্ছন্ন কম্পোনেন্ট',     'text' => 'Blade লেআউট, পার্শিয়াল ও সেকশনে ভাগ করা কোড — যেকোনো অংশ আলাদাভাবে পরিবর্তনযোগ্য।'],
        ['icon' => 'sparkles',     'title' => 'GSAP অ্যানিমেশন',          'text' => 'শুধু data-anim অ্যাট্রিবিউট দিলেই স্ক্রল রিভিল, কাউন্টার ও প্যারালাক্স চালু।'],
        ['icon' => 'shield-check', 'title' => 'নিরাপত্তা অগ্রাধিকার',      'text' => 'CSRF, XSS সুরক্ষা ও Laravel 13-এর সর্বশেষ সিকিউরিটি ডিফল্ট সেটিংস।'],
        ['icon' => 'globe',        'title' => 'SEO ও বহুভাষা প্রস্তুত',    'text' => 'Open Graph, canonical URL ও সেমান্টিক HTML — সার্চ ইঞ্জিনের জন্য আদর্শ।'],
        ['icon' => 'rocket',       'title' => 'সহজ ডিপ্লয়',               'text' => 'এক কমান্ডে বিল্ড, যেকোনো হোস্টিং বা VPS-এ কয়েক মিনিটে লাইভ।'],
    ];
@endphp

<section id="features" class="section scroll-mt-24">
    <div class="container-page">
        <div class="mx-auto max-w-2xl text-center">
            <span class="eyebrow" data-anim="fade-up"><i data-lucide="layers"></i> ফিচারসমূহ</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">
                একটি ওয়েবসাইটের জন্য যা যা দরকার, <span class="text-gradient">সবকিছুই এখানে</span>
            </h2>
            <p class="mt-4 text-muted" data-anim="fade-up" data-anim-delay="0.1">
                শূন্য থেকে শুরু না করে, প্রোডাকশন-রেডি ভিত্তির ওপর আপনার প্রোজেক্ট গড়ুন।
            </p>
        </div>

        <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($features as $feature)
                <article class="card group" data-anim="fade-up" data-anim-delay="{{ 0.05 * ($loop->index % 3) }}">
                    <span class="grid size-12 place-items-center rounded-2xl bg-brand-500/10 text-brand-600 transition group-hover:bg-brand-600 group-hover:text-white dark:text-brand-300">
                        <i data-lucide="{{ $feature['icon'] }}"></i>
                    </span>
                    <h3 class="mt-5 text-lg font-semibold">{{ $feature['title'] }}</h3>
                    <p class="mt-2 text-sm text-muted">{{ $feature['text'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
