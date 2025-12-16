<nav class="navbar bg-base-100 shadow">
    <div class="max-w-7xl mx-auto w-full px-4 flex justify-between items-center">
        {{-- Left section (mobile toggle & logo) --}}
        <div class="navbar-start flex items-center gap-2">
            {{-- Mobile menu toggle (hidden on large screens) --}}
            <div class="dropdown lg:hidden">
                <label tabindex="0" class="btn btn-ghost btn-square">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </label>
                <ul tabindex="-1" class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box z-[1] w-52">
                    <li><a href="{{ route('web.home', ['locale' => app()->getLocale()]) }}">{{ __('nav.home') }}</a></li>
                    <li><a href="{{ route('web.about', ['locale' => app()->getLocale()]) }}">{{ __('nav.about') }}</a></li>
                    <li><a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}">{{ __('nav.programs') }}</a></li>
                    <li><a href="{{ route('web.impact', ['locale' => app()->getLocale()]) }}">{{ __('nav.impact') }}</a></li>
                    <li><a href="{{ route('web.news.index', ['locale' => app()->getLocale()]) }}">{{ __('nav.news') }}</a></li>
                    <li><a href="{{ route('web.contact', ['locale' => app()->getLocale()]) }}">{{ __('nav.contact') }}</a></li>
                </ul>
            </div>
            {{-- Logo & brand name --}}
            <a href="{{ route('web.home', ['locale' => app()->getLocale()]) }}" class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary-content" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3l9 18H3L12 3z"/>
                    </svg>
                </div>
                <span class="text-2xl font-bold text-primary">NEW DAY</span>
            </a>
        </div>

        {{-- Center section (desktop menu) --}}
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal uppercase gap-6">
                <li><a class="{{ request()->routeIs('web.home') ? 'font-semibold' : '' }}" href="{{ route('web.home', ['locale' => app()->getLocale()]) }}">{{ __('nav.home') }}</a></li>
                <li><a class="{{ request()->routeIs('web.about') ? 'font-semibold' : '' }}" href="{{ route('web.about', ['locale' => app()->getLocale()]) }}">{{ __('nav.about') }}</a></li>
                <li><a class="{{ request()->routeIs('web.programs*') ? 'font-semibold' : '' }}" href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}">{{ __('nav.programs') }}</a></li>
                <li><a class="{{ request()->routeIs('web.impact') ? 'font-semibold' : '' }}" href="{{ route('web.impact', ['locale' => app()->getLocale()]) }}">{{ __('nav.impact') }}</a></li>
                <li><a class="{{ request()->routeIs('web.news*') ? 'font-semibold' : '' }}" href="{{ route('web.news.index', ['locale' => app()->getLocale()]) }}">{{ __('nav.news') }}</a></li>
                <li><a class="{{ request()->routeIs('web.contact') ? 'font-semibold' : '' }}" href="{{ route('web.contact', ['locale' => app()->getLocale()]) }}">{{ __('nav.contact') }}</a></li>
            </ul>
        </div>

        {{-- Right section (search & theme toggle) --}}
        <div class="navbar-end flex items-center gap-2">
            {{-- Search button (visible on large screens) --}}
            <button class="btn btn-square btn-ghost hidden lg:inline-flex" aria-label="Search">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
            </button>
            {{-- Theme toggle (requires theme-change plugin) --}}
            <label class="swap swap-rotate">
                <input type="checkbox" class="theme-controller" data-toggle-theme="light,dark"/>
                {{-- Sun icon --}}
                <svg class="swap-on fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M5 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm7-7a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm9 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-3.536-3.536a1 1 0 1 1-1.414-1.414 1 1 0 0 1 1.414 1.414zM12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm0 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-7-7a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm11.071 1.071a1 1 0 1 1-1.414 1.414 1 1 0 0 1 1.414-1.414zM4.929 7.929a1 1 0 1 1-1.414-1.414 1 1 0 0 1 1.414 1.414zm14.142 6.142a1 1 0 1 1 1.414 1.414 1 1 0 0 1-1.414-1.414z"/>
                </svg>
                {{-- Moon icon --}}
                <svg class="swap-off fill-current w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3a7 7 0 0 0 9.79 9.79z"/>
                </svg>
            </label>
        </div>
    </div>
</nav>
