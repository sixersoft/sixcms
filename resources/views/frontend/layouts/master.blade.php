<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-pt-24">
<head>
    @include('frontend.partials.head')
</head>

<body class="min-h-dvh antialiased">
    {{-- Accessibility: skip link for keyboard / screen reader users --}}
    <a href="#main"
       class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] btn btn-primary">
        Skip to main content
    </a>

    @include('frontend.partials.header')

    <main id="main">
        @yield('content')
    </main>

    @include('frontend.partials.footer')

    @stack('modals')
    @stack('scripts')
</body>
</html>
