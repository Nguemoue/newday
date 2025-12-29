<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'New Day'))</title>
    <meta name="description" content="@yield('meta_description', __('layout.footer_about'))">

    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="bg-base-100 text-base-content flex flex-col min-h-screen font-sans antialiased">

    {{-- Top notification bar --}}
    @includeIf('layouts.partials.topbar')

    {{-- Main navigation bar --}}
    @includeIf('layouts.partials.navbar')

    {{-- Hero Section (Home) --}}
    @hasSection('hero')
        @yield('hero')
    @endif

    {{-- Page Header (Internal pages) --}}
    @hasSection('page_header')
        @yield('page_header')
    @endif

    {{-- Main content area --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- Footer --}}
    @includeIf('layouts.partials.footer')

    {{-- Mobile menu toggle script --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileToggle = document.getElementById('mobileMenuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            if (mobileToggle && mobileMenu) {
                mobileToggle.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
    @stack('scripts')
</body>
</html>
