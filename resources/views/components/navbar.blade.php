{{-- resources/views/components/navbar.blade.php --}}
@props([
    'locale' => app()->getLocale(),
    'navItems' => $mainNav ?? []
])

<header class="border-b border-base-200 bg-base-100/80 backdrop-blur z-20 sticky top-0">
    <div class="navbar max-w-7xl mx-auto px-4">

        {{-- LEFT SECTION --}}
        <div class="navbar-start">
            {{-- Mobile Menu Toggle --}}
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>

                {{-- Mobile Dropdown --}}
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">

                    @foreach($navItems as $item)
                        <li>
                            <a href="{{ route($item['route'], ['locale' => $locale]) }}"
                               class="{{ request()->routeIs($item['route']) ? 'active font-semibold' : '' }}">
                                {{ __($item['label']) }}
                            </a>
                        </li>
                    @endforeach

                    <li class="mt-2">
                        <a href="{{ route('web.donate', ['locale' => $locale]) }}"
                           class="btn btn-primary btn-sm w-full">
                            {{ __('nav.donate') }}
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('web.volunteer', ['locale' => $locale]) }}"
                           class="btn btn-outline btn-sm w-full">
                            {{ __('nav.volunteer') }}
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Logo section --}}
            <a href="{{ route('web.home', ['locale' => $locale]) }}"
               class="btn btn-ghost normal-case text-xl font-bold">
                <span class="inline-flex items-center gap-3">
                    <span class="w-9 h-9 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="text-primary font-black text-sm">ND</span>
                    </span>
                    <span>
                        New Day
                        <span class="block text-xs text-base-content/60">
                            {{ __('layout.site_tagline') }}
                        </span>
                    </span>
                </span>
            </a>
        </div>

        {{-- CENTER MENU SECTION --}}
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 gap-1">
                @foreach($navItems as $item)
                    <li>
                        <a href="{{ route($item['route'], ['locale' => $locale]) }}"
                           class="rounded-btn px-3 py-2
                                 {{ request()->routeIs($item['route']) ? 'bg-base-200 font-semibold' : '' }}">
                            {{ __($item['label']) }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- RIGHT SECTION (CTA + Language selector) --}}
        <div class="navbar-end gap-2">

            {{-- Donate CTA --}}
            <a href="{{ route('web.donate', ['locale' => $locale]) }}"
               class="btn btn-primary btn-sm hidden md:inline-flex">
                {{ __('nav.donate') }}
            </a>

            {{-- Volunteer CTA --}}
            <a href="{{ route('web.volunteer', ['locale' => $locale]) }}"
               class="btn btn-outline btn-sm hidden md:inline-flex">
                {{ __('nav.volunteer') }}
            </a>

            {{-- Language Switcher --}}
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-sm">
                    {{ strtoupper($locale) }}
                </label>
                <ul tabindex="0"
                    class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-32 text-sm">
                    <li><a href="{{ url('en') }}">EN</a></li>
                    <li><a href="{{ url('fr') }}">FR</a></li>
                </ul>
            </div>

        </div>

    </div>
</header>
