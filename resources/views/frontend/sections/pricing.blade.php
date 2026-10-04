@php
    $plans = [
        [
            'name' => 'স্টার্টার', 'price' => '০', 'period' => 'মাস', 'featured' => false,
            'desc' => 'ব্যক্তিগত প্রজেক্ট ও শেখার জন্য।',
            'items' => ['১টি ওয়েবসাইট', 'বেসিক কম্পোনেন্ট', 'কমিউনিটি সাপোর্ট', 'মাসিক আপডেট'],
        ],
        [
            'name' => 'প্রো', 'price' => '১,৯৯০', 'period' => 'মাস', 'featured' => true,
            'desc' => 'ফ্রিল্যান্সার ও ছোট এজেন্সির জন্য সেরা।',
            'items' => ['আনলিমিটেড ওয়েবসাইট', 'সব প্রিমিয়াম সেকশন', 'GSAP প্রিমিয়াম প্রিসেট', 'অগ্রাধিকার সাপোর্ট', 'SEO টুলকিট'],
        ],
        [
            'name' => 'এন্টারপ্রাইজ', 'price' => 'কাস্টম', 'period' => null, 'featured' => false,
            'desc' => 'বড় টিম ও বিশেষ প্রয়োজনের জন্য।',
            'items' => ['ডেডিকেটেড ডেভেলপার', 'কাস্টম ইন্টিগ্রেশন', 'SLA সহ ২৪/৭ সাপোর্ট', 'অন-প্রিমাইজ ডিপ্লয়'],
        ],
    ];
@endphp

<section id="pricing" class="section scroll-mt-24">
    <div class="container-page">
        <div class="mx-auto max-w-2xl text-center">
            <span class="eyebrow" data-anim="fade-up"><i data-lucide="star"></i> প্রাইসিং</span>
            <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="fade-up" data-anim-delay="0.05">
                স্বচ্ছ ও <span class="text-gradient">সাশ্রয়ী মূল্য</span>
            </h2>
            <p class="mt-4 text-muted" data-anim="fade-up" data-anim-delay="0.1">কোনো লুকানো খরচ নেই, যেকোনো সময় বাতিল করুন।</p>
        </div>

        <div class="mt-16 grid gap-6 lg:grid-cols-3 lg:items-center">
            @foreach ($plans as $plan)
                <div @class([
                        'card relative flex flex-col',
                        'lg:scale-[1.04] border-brand-500/60 shadow-glow' => $plan['featured'],
                     ])
                     data-anim="fade-up" data-anim-delay="{{ 0.07 * $loop->index }}">

                    @if ($plan['featured'])
                        <span class="absolute -top-3 left-1/2 -translate-x-1/2 rounded-full bg-accent-500 px-3 py-1 text-xs font-semibold text-ink-950">
                            সবচেয়ে জনপ্রিয়
                        </span>
                    @endif

                    <h3 class="text-lg font-semibold">{{ $plan['name'] }}</h3>
                    <p class="mt-1 text-sm text-muted">{{ $plan['desc'] }}</p>

                    <p class="mt-6 flex items-end gap-1">
                        <span class="font-display text-4xl font-semibold">{{ $plan['price'] }}</span>
                        @if ($plan['period'])
                            <span class="pb-1 text-sm text-muted">৳ / {{ $plan['period'] }}</span>
                        @endif
                    </p>

                    <ul class="mt-6 flex-1 space-y-3 text-sm">
                        @foreach ($plan['items'] as $item)
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check" class="mt-0.5 shrink-0 text-success"></i>
                                <span class="text-muted">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <a href="#cta" class="btn mt-8 w-full {{ $plan['featured'] ? 'btn-primary' : 'btn-ghost' }}">
                        {{ $plan['price'] === 'কাস্টম' ? 'যোগাযোগ করুন' : 'প্ল্যান নিন' }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
