<section id="cta" class="section scroll-mt-24">
    <div class="container-page">
        <div class="relative overflow-hidden rounded-[var(--radius-card)] bg-brand-700 px-6 py-16 text-center text-white sm:px-14 lg:py-20"
             data-anim="zoom">

            <div class="blob size-80 bg-accent-500 -top-16 -left-10 opacity-50" aria-hidden="true"></div>
            <div class="blob size-80 bg-brand-300 -bottom-20 -right-10 opacity-50" aria-hidden="true"></div>

            <div class="relative mx-auto max-w-2xl">
                <span class="eyebrow border-white/25 text-white/80">
                    <i data-lucide="sparkles"></i> আজই শুরু করুন
                </span>

                <h2 class="mt-6 font-display text-3xl font-semibold sm:text-4xl lg:text-5xl">
                    আপনার পরবর্তী ওয়েবসাইট শুরু হোক এখান থেকেই
                </h2>

                <p class="mt-5 text-white/75">
                    ক্রেডিট কার্ড লাগবে না। ১৪ দিনের ফ্রি ট্রায়াল, যেকোনো সময় বাতিল করুন।
                </p>

                <form class="mx-auto mt-9 flex max-w-md flex-col gap-3 sm:flex-row" action="#" method="POST">
                    @csrf
                    <label for="email" class="sr-only">ইমেইল</label>
                    <input id="email" name="email" type="email" required placeholder="আপনার ইমেইল লিখুন"
                           class="w-full rounded-full border border-white/25 bg-white/10 px-5 py-3 text-sm text-white
                                  placeholder:text-white/60 focus:border-white focus:outline-none">
                    <button type="submit" class="btn btn-accent shrink-0">
                        ফ্রি ট্রায়াল <i data-lucide="arrow-right"></i>
                    </button>
                </form>

                <p class="mt-5 flex items-center justify-center gap-2 text-xs text-white/65">
                    <i data-lucide="shield-check"></i> আপনার তথ্য সম্পূর্ণ সুরক্ষিত
                </p>
            </div>
        </div>
    </div>
</section>
