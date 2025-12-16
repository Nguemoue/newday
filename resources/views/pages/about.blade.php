{{--
    About page for New Day ONG.

    This view extends the main layout and presents the organisation’s vision, mission and
    history timeline. It pulls data from the backend where available and gracefully
    handles missing data. DaisyUI classes are used for styling and the layout
    supports both light and dark themes.
--}}

@extends('layouts.app')

@section('title', __('nav.about') . ' | ' . __('layout.site_title'))

@section('page_header')
    <h1 class="text-3xl md:text-4xl font-bold mb-1">
        {{ __('À propos de New Day') }}
    </h1>
    <p class="text-base-content/70">
        {{ __('Découvrez notre vision, notre mission et notre histoire.') }}
    </p>
@endsection

@section('content')
    {{-- Vision & Mission section --}}
    <section class="space-y-10">
        <div class="grid md:grid-cols-2 gap-8 items-start">
            <div>
                <h2 class="text-2xl font-bold mb-4">{{ __('Notre vision') }}</h2>
                <p class="mb-4">
                    {{ __('Construire une société camerounaise où chaque personne malentendante peut accéder à une formation qualifiante lui permettant de vivre dignement de son travail.') }}
                </p>
                <h2 class="text-2xl font-bold mb-4">{{ __('Notre mission') }}</h2>
                <p>
                    {{ __('Contribuer à l’intégration sociale et économique des personnes sourdes et malentendantes en leur offrant des formations adaptées et de qualité, en les accompagnant vers l’autonomie et l’emploi.') }}
                </p>
            </div>
            <div class="hidden md:block">
                {{-- Illustrative image; replace with a relevant photo in /public/images --}}
                <img src="{{ asset('images/about-vision.jpg') }}" alt="Vision de New Day" class="rounded-lg shadow-md object-cover w-full h-64" />
            </div>
        </div>

        {{-- Objectives section (optional) --}}
        <div>
            <h2 class="text-2xl font-bold mb-4">{{ __('Nos objectifs') }}</h2>
            <ul class="list-disc ml-5 space-y-2">
                <li>{{ __('Former des bénéficiaires dans des métiers pratiques tels que la couture, le tissage, la maroquinerie, le perlage, la fabrication de sacs, le salon de coiffure/onglerie, la pisciculture ou l’élevage.') }}</li>
                <li>{{ __('Améliorer les capacités de communication en langue des signes au sein de l’équipe pédagogique.') }}</li>
                <li>{{ __('Créer des opportunités d’emploi ou d’auto‑emploi pour les personnes formées et assurer leur suivi.') }}</li>
                <li>{{ __('Sensibiliser les entreprises, institutions et communautés à l’inclusion professionnelle des personnes malentendantes.') }}</li>
            </ul>
        </div>

        {{-- Timeline section --}}
        <div>
            <h2 class="text-2xl font-bold mb-6">{{ __('Notre histoire') }}</h2>
            {{-- Static timeline as an example; replace with dynamic data if available via a collection --}}
            <div class="relative border-l-2 border-primary pl-6 space-y-10">
                {{-- Example: early years --}}
                <div class="relative">
                    <div class="absolute -left-5 top-0 flex items-center justify-center w-10 h-10 bg-primary text-primary-content rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold">2010</h3>
                    <p class="text-base-content/70">
                        {{ __('Adoption de la loi camerounaise pour la protection des personnes handicapées, fondant la base juridique pour notre action future.') }}
                    </p>
                </div>
                {{-- Example: official recognition --}}
                <div class="relative">
                    <div class="absolute -left-5 top-0 flex items-center justify-center w-10 h-10 bg-primary text-primary-content rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold">2025</h3>
                    <p class="text-base-content/70">
                        {{ __('Obtention de la reconnaissance officielle de l’ONG New Day (décision n°00000251/RDA/J06/SAAJP/BAPP du 14 février 2025).') }}
                    </p>
                </div>
                {{-- Example: first training cohort --}}
                <div class="relative">
                    <div class="absolute -left-5 top-0 flex items-center justify-center w-10 h-10 bg-primary text-primary-content rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold">2026</h3>
                    <p class="text-base-content/70">
                        {{ __('Lancement des premiers programmes de formation : couture et tissage, avec l’inscription de 20 jeunes malentendants.') }}
                    </p>
                </div>
                {{-- Example: expansion --}}
                <div class="relative">
                    <div class="absolute -left-5 top-0 flex items-center justify-center w-10 h-10 bg-primary text-primary-content rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold">2028</h3>
                    <p class="text-base-content/70">
                        {{ __('Diversification des formations (maroquinerie, perlage, pisciculture) et développement de partenariats avec des entreprises locales.') }}
                    </p>
                </div>
                {{-- Example: present and future --}}
                <div class="relative">
                    <div class="absolute -left-5 top-0 flex items-center justify-center w-10 h-10 bg-primary text-primary-content rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M17 9l4 4-4 4" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold">2030</h3>
                    <p class="text-base-content/70">
                        {{ __('Objectif futur : créer un centre d’orientation et de formation moderne offrant un accès à un plus grand nombre de bénéficiaires et assurer une intégration professionnelle durable.') }}
                    </p>
                </div>
            </div>
        </div>

        {{-- Call to action section --}}
        <div class="mt-16 text-center bg-primary text-primary-content rounded-lg p-8 space-y-4">
            <h2 class="text-3xl font-bold">{{ __('Rejoignez notre mission') }}</h2>
            <p class="text-md md:text-lg max-w-3xl mx-auto">
                {{ __('Ensemble, donnons aux personnes malentendantes les moyens de bâtir leur avenir. Engagez‑vous en faisant un don, en devenant bénévole ou en devenant partenaire.') }}
            </p>
            <div class="flex flex-wrap justify-center gap-4 mt-4">
                <a href="{{ route('web.donate', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary uppercase">
                    {{ __('nav.donate') }}
                </a>
                <a href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}" class="btn btn-outline btn-secondary uppercase">
                    {{ __('nav.volunteer') }}
                </a>
                <a href="{{ route('web.partners', ['locale' => app()->getLocale()]) }}" class="btn btn-outline btn-secondary uppercase">
                    {{ __('nav.partners') }}
                </a>
            </div>
        </div>
    </section>
@endsection
