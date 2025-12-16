@php
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp

<div class="bg-base-100 border-b text-sm">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between py-2">
        <div class="flex items-center gap-3">
            {{-- Language switcher with flags --}}
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <a
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                    class="btn btn-ghost btn-sm px-2 flex items-center gap-1 {{ app()->getLocale() === $localeCode ? 'font-semibold' : '' }}"
                >
                    {{-- Display the flag image corresponding to the locale.  Place flag SVGs
                         in public/images/flags/{locale}.svg.  If the image is missing,
                         the alt text will help identify the locale visually. --}}
                    <img
                        src="{{ asset('images/flags/' . $localeCode . '.svg') }}"
                        alt="{{ $properties['native'] }} flag"
                        class="w-4 h-4"
                    />
                    {{ strtoupper($localeCode) }}
                </a>
            @endforeach
            {{-- Social media icons --}}
            <a href="#" class="btn btn-square btn-xs btn-ghost" aria-label="Facebook">
                <x-icon-facebook class="w-3 h-3" />
            </a>
            <a href="#" class="btn btn-square btn-xs btn-ghost" aria-label="LinkedIn">
                <x-icon-linkedin class="w-3 h-3" />
            </a>
            <a href="#" class="btn btn-square btn-xs btn-ghost" aria-label="Twitter">
                <x-icon-twitter class="w-3 h-3" />
            </a>
            <a href="#" class="btn btn-square btn-xs btn-ghost" aria-label="Instagram">
                <x-icon-instagram class="w-3 h-3" />
            </a>
        </div>
        <div class="flex items-center gap-2">
            {{-- Volunteer call to action --}}
            <a
                href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}"
                class="hidden sm:inline-flex btn btn-ghost btn-sm uppercase"
            >
                {{ __('nav.volunteer') }}
            </a>
            {{-- Donate call to action --}}
            <a
                href="{{ route('web.donate', ['locale' => app()->getLocale()]) }}"
                class="btn btn-secondary btn-sm uppercase"
            >
                {{ __('nav.donate') }}
            </a>
        </div>
    </div>
</div>
