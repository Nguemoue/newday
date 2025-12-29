@extends('layouts.app')

@section('title', $program->title . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="bg-base-200 py-10" data-aos="fade-in">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <nav class="text-sm breadcrumbs mb-4 justify-center flex text-base-content/60">
                <ul>
                    <li><a href="{{ route('web.home', ['locale' => app()->getLocale()]) }}">{{ __('Accueil') }}</a></li>
                    <li><a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}">{{ __('Programmes') }}</a></li>
                    <li><span class="font-semibold text-primary">{{ $program->title }}</span></li>
                </ul>
            </nav>
            <h1 class="text-3xl md:text-5xl font-bold mb-4" data-aos="fade-down">
                {{ $program->title }}
            </h1>
        </div>
    </div>
@endsection

@section('content')
    <section class="max-w-5xl mx-auto px-4 py-12">
        <div class="card bg-base-100 shadow-xl overflow-hidden border border-base-200" data-aos="fade-up">
            @if($program->image)
                <figure class="w-full h-64 md:h-96 relative">
                    <img src="{{ asset('storage/'.$program->image) }}" alt="{{ $program->title }}" class="w-full h-full object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                </figure>
            @endif
            
            <div class="card-body p-8 md:p-12">
                <div class="prose prose-lg max-w-none text-base-content/80">
                    <h2 class="text-primary">{{ __('Description du programme') }}</h2>
                    {!! $program->content ?? '<p class="text-lg leading-relaxed">' . $program->description . '</p>' !!}
                    
                    <h3>{{ __('Ce que vous apprendrez') }}</h3>
                    <ul>
                        <li>{{ __('Techniques professionnelles et maîtrise des outils.') }}</li>
                        <li>{{ __('Gestion de projet et entrepreneuriat.') }}</li>
                        <li>{{ __('Développement personnel et confiance en soi.') }}</li>
                    </ul>
                </div>

                <div class="divider my-8"></div>

                <div class="flex flex-col md:flex-row items-center justify-between gap-6 bg-base-200 p-8 rounded-xl">
                    <div>
                        <h3 class="font-bold text-xl mb-2">{{ __('Intéressé(e) par cette formation ?') }}</h3>
                        <p class="text-base-content/70">{{ __('Les inscriptions sont ouvertes. Rejoignez-nous dès maintenant.') }}</p>
                    </div>
                    <a href="{{ route('web.contact', ['locale' => app()->getLocale()]) }}" class="btn btn-primary btn-lg shadow-md uppercase tracking-wide flex-shrink-0">
                        {{ __('S’inscrire maintenant') }}
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}" class="btn btn-ghost">
                &larr; {{ __('Retour aux programmes') }}
            </a>
        </div>
    </section>
@endsection