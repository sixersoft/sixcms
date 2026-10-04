<section id="cta" class="section scroll-mt-24">
    <div class="container-page">
        <div class="relative overflow-hidden rounded-[var(--radius-card)] bg-brand-700 px-6 py-16 text-center text-white sm:px-14 lg:py-20"
             data-anim="zoom">

            <div class="blob size-80 bg-accent-500 -top-16 -left-10 opacity-50" aria-hidden="true"></div>
            <div class="blob size-80 bg-brand-300 -bottom-20 -right-10 opacity-50" aria-hidden="true"></div>

            <div class="relative mx-auto max-w-2xl">
                <span class="eyebrow border-white/25 text-white/80">
                    <i data-lucide="sparkles"></i> Start today
                </span>

                <h2 class="mt-6 font-display text-3xl font-semibold sm:text-4xl lg:text-5xl">
                    Your next website starts right here
                </h2>

                <p class="mt-5 text-white/75">
                    No credit card required. 14 day free trial, cancel any time.
                </p>

                <form class="mx-auto mt-9 flex max-w-md flex-col gap-3 sm:flex-row" action="#" method="POST">
                    @csrf
                    <label for="email" class="sr-only">Email address</label>
                    <input id="email" name="email" type="email" required placeholder="Enter your email"
                           class="w-full rounded-full border border-white/25 bg-white/10 px-5 py-3 text-sm text-white
                                  placeholder:text-white/60 focus:border-white focus:outline-none">
                    <button type="submit" class="btn btn-accent shrink-0">
                        Start free trial <i data-lucide="arrow-right"></i>
                    </button>
                </form>

                <p class="mt-5 flex items-center justify-center gap-2 text-xs text-white/65">
                    <i data-lucide="shield-check"></i> Your data stays private and secure
                </p>
            </div>
        </div>
    </div>
</section>
