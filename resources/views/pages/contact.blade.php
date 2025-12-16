

@extends('layouts.app')

@section('title', __('New Day | Contact'))

{{-- Optional page header --}}
@section('page_header')
    <div class="text-center py-8">
        <h1 class="text-4xl font-bold mb-2">{{ __('Contactez‑nous') }}</h1>
        <p class="text-base-content/80 max-w-2xl mx-auto">
            {{ __('Nous sommes à votre écoute. Prenez contact pour en savoir plus sur nos programmes ou pour toute question.') }}
        </p>
    </div>
@endsection

@section('content')
    <section class="py-12 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                {{-- Contact information section --}}
                <div>
                    <h2 class="text-2xl font-bold mb-4">{{ __('Informations de contact') }}</h2>
                    <ul class="space-y-4 text-base-content/80">
                        <li class="flex items-start gap-3">
                            <x-icon-map-pin class="w-5 h-5 text-primary" />
                            <span>Yaoundé, Cameroun</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <x-icon-envelope class="w-5 h-5 text-primary" />
                            <span><a href="mailto:contact@newday.org" class="link">contact@newday.org</a></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <x-icon-phone class="w-5 h-5 text-primary" />
                            <span><a href="tel:+237000000000" class="link">+237 000 000 000</a></span>
                        </li>
                    </ul>
                    <div class="mt-8 text-base-content/80 space-y-3">
                        <p>{{ __('Notre équipe est disponible du lundi au vendredi, de 9h à 17h.') }}</p>
                        <p>{{ __('N’hésitez pas à nous écrire pour obtenir plus d’informations sur nos formations, pour proposer un partenariat ou pour toute question liée à l’inclusion des personnes malentendantes.') }}</p>
                    </div>
                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a
                            href="{{ route('web.donate', ['locale' => app()->getLocale()]) }}"
                            class="btn btn-primary btn-sm uppercase"
                        >
                            {{ __('nav.donate') }}
                        </a>
                        <a
                            href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}"
                            class="btn btn-outline btn-secondary btn-sm uppercase"
                        >
                            {{ __('nav.volunteer') }}
                        </a>
                    </div>
                </div>

                {{-- Contact form section --}}
                <div>
                    <h2 class="text-2xl font-bold mb-4">{{ __('Envoyez‑nous un message') }}</h2>
                    {{-- Basic contact form; the submission route should be defined in your routes file. --}}
                    <form method="POST" action="{{ route('web.contact.store') }}" class="space-y-5">
                        @csrf
                        <div>
                            <label for="name" class="label">
                                <span class="label-text">{{ __('Votre nom') }}</span>
                            </label>
                            <input type="text" id="name" name="name" class="input input-bordered w-full" required />
                        </div>
                        <div>
                            <label for="email" class="label">
                                <span class="label-text">{{ __('Votre e‑mail') }}</span>
                            </label>
                            <input type="email" id="email" name="email" class="input input-bordered w-full" required />
                        </div>
                        <div>
                            <label for="subject" class="label">
                                <span class="label-text">{{ __('Sujet') }}</span>
                            </label>
                            <input type="text" id="subject" name="subject" class="input input-bordered w-full" />
                        </div>
                        <div>
                            <label for="message" class="label">
                                <span class="label-text">{{ __('Message') }}</span>
                            </label>
                            <textarea id="message" name="message" rows="5" class="textarea textarea-bordered w-full" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary uppercase">
                            {{ __('Envoyer') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
