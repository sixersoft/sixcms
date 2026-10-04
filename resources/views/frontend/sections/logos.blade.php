@php
    $brands = ['Laravel', 'Tailwind', 'GSAP', 'Lucide', 'Vite', 'Alpine', 'Livewire'];
@endphp

<section class="border-y border-[var(--surface-border)] py-10" aria-label="আমাদের প্রযুক্তি অংশীদার">
    <div class="container-page">
        <p class="text-center text-xs font-medium tracking-[0.2em] uppercase text-muted">
            আধুনিক প্রযুক্তির ওপর নির্মিত
        </p>

        <div class="relative mt-7 overflow-hidden [mask-image:linear-gradient(90deg,transparent,#000_12%,#000_88%,transparent)]">
            <div class="marquee">
                @foreach (array_merge($brands, $brands) as $brand)
                    <span class="font-display text-xl font-medium text-muted opacity-70 whitespace-nowrap">{{ $brand }}</span>
                @endforeach
            </div>
        </div>
    </div>
</section>
