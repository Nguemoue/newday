@extends('layouts.app')

@section('title', __('Faire un don') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Soutenez notre cause') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Chaque don est une pierre à l’édifice de l’inclusion. Aidez-nous à changer des vies en offrant un avenir meilleur.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="py-16 px-4 max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 lg:gap-20">
        <div class="space-y-8" data-aos="fade-right">
            <div>
                <h2 class="text-3xl font-bold mb-6 text-primary">{{ __('Pourquoi donner ?') }}</h2>
                <p class="text-lg text-base-content/80 leading-relaxed mb-6">
                    {{ __('En faisant un don à New Day, vous ne donnez pas simplement de l’argent. Vous offrez à une personne sourde ou malentendante la clé de son autonomie : une formation, un métier, une dignité.') }}
                </p>
            </div>

            <div class="grid gap-4">
                <div class="flex items-start gap-4 p-4 bg-base-100 rounded-lg shadow-sm border border-base-200 hover:shadow-md transition">
                    <div class="text-2xl">✏️</div>
                    <div>
                        <h3 class="font-bold text-lg text-primary">{{ __('5 000 FCFA') }}</h3>
                        <p class="text-sm text-base-content/70">{{ __('Offre un kit de fournitures scolaires complet pour la formation théorique.') }}</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-4 bg-base-100 rounded-lg shadow-sm border border-base-200 hover:shadow-md transition">
                    <div class="text-2xl">🎓</div>
                    <div>
                        <h3 class="font-bold text-lg text-primary">{{ __('25 000 FCFA') }}</h3>
                        <p class="text-sm text-base-content/70">{{ __('Finance un mois entier de formation professionnelle pour un jeune.') }}</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-4 bg-base-100 rounded-lg shadow-sm border border-base-200 hover:shadow-md transition">
                    <div class="text-2xl">🧵</div>
                    <div>
                        <h3 class="font-bold text-lg text-primary">{{ __('100 000 FCFA') }}</h3>
                        <p class="text-sm text-base-content/70">{{ __('Permet l’achat d’une machine à coudre pour l’installation d’un bénéficiaire en fin de formation.') }}</p>
                    </div>
                </div>
            </div>

            <div class="alert alert-info shadow-lg flex items-start gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="text-sm">{{ __('Transparence garantie : 100% de vos dons sont directement affectés à nos missions sociales et programmes de formation.') }}</span>
            </div>
        </div>

        <div class="card bg-base-100 shadow-2xl border border-base-200 h-fit" data-aos="fade-left">
            <div class="card-body p-8">
                <h2 class="card-title text-2xl font-bold justify-center mb-8">{{ __('Moyens de paiement sécurisés') }}</h2>

                <div class="space-y-4">
                    <button class="btn btn-block btn-lg btn-outline gap-3 hover:btn-primary normal-case h-auto py-4">
                        <div class="text-left flex-1">
                            <span class="block font-bold">Orange Money</span>
                            <span class="text-xs opacity-70">Code marchand : #150*...#</span>
                        </div>
                        <span class="badge badge-warning">OM</span>
                    </button>

                    <button class="btn btn-block btn-lg btn-outline gap-3 hover:btn-secondary normal-case h-auto py-4">
                        <div class="text-left flex-1">
                            <span class="block font-bold">MTN Mobile Money</span>
                            <span class="text-xs opacity-70">Code marchand : *126*...#</span>
                        </div>
                        <span class="badge badge-warning bg-yellow-400 text-black border-none">MoMo</span>
                    </button>

                    <button class="btn btn-block btn-lg btn-outline gap-3 hover:btn-accent normal-case h-auto py-4">
                        <div class="text-left flex-1">
                            <span class="block font-bold">Virement Bancaire</span>
                            <span class="text-xs opacity-70">RIB : 10002 00000 00000000000 00</span>
                        </div>
                        <span class="text-xl">🏦</span>
                    </button>
                </div>

                <div class="divider my-8 text-base-content/50">{{ __('Autres contributions') }}</div>

                <div class="text-center">
                    <p class="mb-3 font-semibold">{{ __('Vous souhaitez faire un don en matériel ?') }}</p>
                    <p class="text-sm text-base-content/70 mb-4">{{ __('Machines, tissus, ordinateurs, fournitures...') }}</p>
                    <a href="{{ route('web.contact', ['locale' => app()->getLocale()]) }}" class="btn btn-link btn-sm text-primary no-underline hover:underline">
                        {{ __('Contactez-nous pour organiser le don') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
