@extends('frontend.layouts.master', [
    'title'       => 'Home',
    'description' => 'A fast, animated and SEO friendly website template built with Laravel 13, Tailwind CSS 4, GSAP and Lucide icons.',
])

@section('content')
    @include('frontend.sections.hero')
    @include('frontend.sections.logos')
    @include('frontend.sections.features')
    @include('frontend.sections.how')
    @include('frontend.sections.testimonials')
    @include('frontend.sections.pricing')
    @include('frontend.sections.faq')
    @include('frontend.sections.cta')
@endsection

@push('head')
    {{-- Structured data (SEO) --}}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SoftwareApplication",
            "name": "{{ config('app.name', 'SixCMS') }}",
            "applicationCategory": "WebApplication",
            "operatingSystem": "Web",
            "offers": { "@type": "Offer", "price": "0", "priceCurrency": "USD" }
        }
    </script>
@endpush
