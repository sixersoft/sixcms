@php
    $steps = [
        ['no' => '০১', 'title' => 'প্রজেক্ট ইনস্টল করুন', 'text' => 'composer install ও npm install — এক মিনিটেই পরিবেশ প্রস্তুত।'],
        ['no' => '০২', 'title' => 'থিম কাস্টমাইজ করুন',  'text' => 'theme.css-এ রঙ ও ফন্ট বদলান, পুরো সাইট সাথে সাথে আপডেট হবে।'],
        ['no' => '০৩', 'title' => 'কনটেন্ট যোগ করুন',    'text' => 'Blade সেকশনে আপনার লেখা ও ছবি বসান, কোনো জটিলতা ছাড়াই।'],
        ['no' => '০৪', 'title' => 'লাইভ করুন',           'text' => 'npm run build চালিয়ে সার্ভারে আপলোড — ব্যাস, সাইট প্রস্তুত।'],
    ];
@endphp

<section id="how" class="section scroll-mt-24 border-y border-[var(--surface-border)] bg-[var(--surface-raised)]">
    <div class="container-page">
        <div class="grid gap-14 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
            <div class="lg:sticky lg:top-28">
                <span class="eyebrow" data-anim="left"><i data-lucide="rocket"></i> কীভাবে কাজ করে</span>
                <h2 class="mt-5 font-display text-3xl font-semibold sm:text-4xl" data-anim="left" data-anim-delay="0.05">
                    চারটি ধাপে <span class="text-gradient">লাইভ ওয়েবসাইট</span>
                </h2>
                <p class="mt-4 max-w-md text-muted" data-anim="left" data-anim-delay="0.1">
                    জটিল কনফিগারেশন নয় — সহজ, স্পষ্ট ও পুনরাবৃত্তিযোগ্য একটি ওয়ার্কফ্লো।
                </p>
                <a href="#cta" class="btn btn-primary mt-8" data-anim="left" data-anim-delay="0.15">
                    এখনই শুরু করুন <i data-lucide="arrow-right"></i>
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
