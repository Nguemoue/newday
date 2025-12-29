{{--
    About page for New Day ONG.
--}}

@extends('layouts.app')

@section('title', __('nav.about') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('À propos de New Day') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Découvrez l’histoire, la vision et les valeurs qui animent notre engagement quotidien auprès des personnes malentendantes.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    {{-- Vision & Mission section --}}
    <section class="py-20 px-4 max-w-7xl mx-auto space-y-20">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold mb-6 text-primary flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                    {{ __('Notre Vision') }}
                </h2>
                <p class="mb-6 text-lg text-base-content/80 leading-relaxed">
                    {{ __('Construire une société camerounaise inclusive où chaque personne malentendante, libérée des barrières de communication et des préjugés, peut accéder à une formation qualifiante et vivre dignement de son travail.') }}
                </p>
                <div class="divider"></div>
                <h2 class="text-3xl font-bold mb-6 text-primary flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    {{ __('Notre Mission') }}
                </h2>
                <p class="text-lg text-base-content/80 leading-relaxed">
                    {{ __('Contribuer à l’intégration sociale et économique des personnes sourdes et malentendantes en leur offrant des formations adaptées, un soutien psychologique et matériel, et en les accompagnant vers l’autonomie et l’emploi durable.') }}
                </p>
            </div>
            <div class="relative" data-aos="fade-left">
                <div class="absolute -inset-4 bg-secondary/20 rounded-xl transform rotate-2"></div>
                <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80" alt="Vision de New Day" class="relative rounded-lg shadow-2xl object-cover w-full h-[500px]" />
            </div>
        </div>

        {{-- Objectives section --}}
        <div class="bg-base-200 rounded-3xl p-8 md:p-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold mb-10 text-center">{{ __('Nos Objectifs Stratégiques') }}</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="card bg-base-100 shadow-md hover:shadow-lg transition">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-primary/10 text-primary flex items-center justify-center mb-4">
                            <span class="text-3xl">🎓</span>
                        </div>
                        <h3 class="font-bold mb-2">{{ __('Former') }}</h3>
                        <p class="text-sm text-base-content/70">{{ __('Offrir des compétences pratiques dans des métiers porteurs.') }}</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md hover:shadow-lg transition">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-secondary/10 text-secondary flex items-center justify-center mb-4">
                            <span class="text-3xl">🗣️</span>
                        </div>
                        <h3 class="font-bold mb-2">{{ __('Communiquer') }}</h3>
                        <p class="text-sm text-base-content/70">{{ __('Promouvoir la langue des signes et briser l’isolement.') }}</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md hover:shadow-lg transition">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-accent/10 text-accent flex items-center justify-center mb-4">
                            <span class="text-3xl">💼</span>
                        </div>
                        <h3 class="font-bold mb-2">{{ __('Insérer') }}</h3>
                        <p class="text-sm text-base-content/70">{{ __('Créer des opportunités d’emploi et d’auto-emploi.') }}</p>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md hover:shadow-lg transition">
                    <div class="card-body items-center text-center">
                        <div class="w-16 h-16 rounded-full bg-info/10 text-info flex items-center justify-center mb-4">
                            <span class="text-3xl">🤝</span>
                        </div>
                        <h3 class="font-bold mb-2">{{ __('Sensibiliser') }}</h3>
                        <p class="text-sm text-base-content/70">{{ __('Changer le regard de la société sur le handicap auditif.') }}</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Timeline section --}}
        <div>
            <h2 class="text-3xl font-bold mb-12 text-center" data-aos="fade-up">{{ __('Notre Histoire') }}</h2>
            <div class="relative max-w-4xl mx-auto border-l-4 border-primary/20 pl-8 ml-4 md:ml-auto space-y-12">
                
                <div class="relative" data-aos="fade-left">
                    <div class="absolute -left-[42px] top-0 flex items-center justify-center w-6 h-6 bg-primary rounded-full border-4 border-base-100"></div>
                    <div class="bg-base-100 p-6 rounded-xl shadow-md border border-base-200">
                        <span class="text-secondary font-bold text-xl block mb-2">2010</span>
                        <h3 class="text-lg font-bold mb-2">{{ __('La Genèse') }}</h3>
                        <p class="text-base-content/70">
                            {{ __('Adoption de la loi camerounaise pour la protection des personnes handicapées. Une prise de conscience qui a semé la graine de notre engagement.') }}
                        </p>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-delay="100">
                    <div class="absolute -left-[42px] top-0 flex items-center justify-center w-6 h-6 bg-primary rounded-full border-4 border-base-100"></div>
                    <div class="bg-base-100 p-6 rounded-xl shadow-md border border-base-200">
                        <span class="text-secondary font-bold text-xl block mb-2">2025</span>
                        <h3 class="text-lg font-bold mb-2">{{ __('La Naissance Officielle') }}</h3>
                        <p class="text-base-content/70">
                            {{ __('Obtention de la reconnaissance officielle de l’ONG New Day (décision n°00000251/RDA/J06/SAAJP/BAPP). Le début d’une grande aventure humaine.') }}
                        </p>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-delay="200">
                    <div class="absolute -left-[42px] top-0 flex items-center justify-center w-6 h-6 bg-primary rounded-full border-4 border-base-100"></div>
                    <div class="bg-base-100 p-6 rounded-xl shadow-md border border-base-200">
                        <span class="text-secondary font-bold text-xl block mb-2">2026</span>
                        <h3 class="text-lg font-bold mb-2">{{ __('Premiers Pas') }}</h3>
                        <p class="text-base-content/70">
                            {{ __('Lancement de la première cohorte : 20 jeunes inscrits en couture et tissage. Les premiers sourires et les premiers succès.') }}
                        </p>
                    </div>
                </div>

                <div class="relative" data-aos="fade-left" data-aos-delay="300">
                    <div class="absolute -left-[42px] top-0 flex items-center justify-center w-6 h-6 bg-primary rounded-full border-4 border-base-100"></div>
                    <div class="bg-base-100 p-6 rounded-xl shadow-md border border-base-200 opacity-70">
                        <span class="text-secondary font-bold text-xl block mb-2">2030 (Vision)</span>
                        <h3 class="text-lg font-bold mb-2">{{ __('L’Avenir') }}</h3>
                        <p class="text-base-content/70">
                            {{ __('Création d’un centre de référence national pour la formation inclusive, accueillant plus de 500 bénéficiaires par an.') }}
                        </p>
                    </div>
                </div>

            </div>
        </div>

        {{-- Call to action section --}}
        <div class="text-center bg-primary text-primary-content rounded-3xl p-12 shadow-2xl" data-aos="zoom-in">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">{{ __('Rejoignez notre mission') }}</h2>
            <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8 opacity-90">
                {{ __('Ensemble, donnons aux personnes malentendantes les moyens de bâtir leur avenir. Chaque geste compte.') }}
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="{{ route('web.donate', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary btn-lg shadow-lg border-2 border-transparent hover:border-white">
                    {{ __('Faire un don') }}
                </a>
                <a href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}" class="btn btn-outline btn-lg text-white border-white hover:bg-white hover:text-primary hover:border-white">
                    {{ __('Devenir bénévole') }}
                </a>
            </div>
        </div>
    </section>
@endsection