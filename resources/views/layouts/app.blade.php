<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('layout.site_title'))</title>
    {{-- You can override this description in child views --}}
    <meta name="description" content="@yield('meta_description', __('layout.footer_about'))">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    {{-- Import compiled Tailwind CSS & DaisyUI (already included in app.css) --}}
    @vite('resources/css/app.css')
    @stack('head')
</head>
<body class="bg-base-100 text-base-content flex flex-col min-h-screen">
{{-- Top notification bar --}}
@includeIf('layouts.partials.topbar')

{{-- Main navigation bar --}}
@includeIf('layouts.partials.navbar')

{{-- Hero Carousel --}}
@sectionMissing('hero')
    @includeIf('layouts.partials.hero')
@endif

{{-- Main content area --}}
@yield('content')

{{-- Footer --}}
@includeIf('layouts.partials.footer')

{{-- Mobile menu toggle script --}}
<script>
    const mobileToggle = document.getElementById('mobileMenuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileToggle) {
        mobileToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
</script>
@stack('scripts')
</body>
</html>
