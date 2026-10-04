@php
    $siteName   = config('app.name', 'SixCMS');
    $metaTitle  = trim(($title ?? null) ? $title . ' — ' . $siteName : $siteName . ' — আধুনিক ওয়েবসাইট বানানোর প্ল্যাটফর্ম');
    $metaDesc   = $description ?? 'Laravel 13, Tailwind CSS 4, GSAP ও Lucide দিয়ে তৈরি অতি দ্রুত, SEO-বান্ধব ও সুন্দর ওয়েবসাইট।';
    $metaImage  = $ogImage ?? asset('og-image.jpg');
@endphp

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDesc }}">
<link rel="canonical" href="{{ url()->current() }}">

{{-- Open Graph / Twitter --}}
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDesc }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $metaImage }}">
<meta name="twitter:card" content="summary_large_image">

{{-- Favicon --}}
<link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">

{{-- FOUC ছাড়া ডার্ক মোড (রেন্ডারের আগেই ক্লাস বসে যায়) --}}
<script>
    (() => {
        const t = localStorage.getItem('sixcms-theme')
            ?? (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        document.documentElement.classList.toggle('dark', t === 'dark');
        document.documentElement.style.colorScheme = t;
    })();
</script>

{{-- Vite: CSS + JS (প্রোডাকশনে অটো preload + hash) --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

@stack('head')
