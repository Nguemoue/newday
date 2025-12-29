{{--
    Contact page for New Day ONG.
--}}

@extends('layouts.app')

@section('title', __('New Day | Contact'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Contactez‑nous') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Une question, un projet ou une envie de nous rejoindre ? Nous sommes à votre écoute pour construire ensemble un avenir inclusif.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="py-16 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            {{-- Success Message --}}
            @if(session('success'))
                <div class="alert alert-success shadow-lg mb-8" data-aos="fade-down">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
                {{-- Contact Info --}}
                <div class="space-y-8" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl font-bold mb-6 text-primary">{{ __('Nos coordonnées') }}</h2>
                        <p class="text-base-content/70 mb-8 text-lg">
                            {{ __('Retrouvez-nous à notre siège ou contactez-nous via les canaux ci-dessous. Notre équipe vous répondra dans les plus brefs délais.') }}
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4 p-6 bg-base-200 rounded-xl shadow-sm hover:shadow-md transition">
                            <div class="w-12 h-12 rounded-full bg-primary text-primary-content flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">{{ __('Adresse') }}</h3>
                                <p class="text-base-content/80">Yaoundé, Cameroun</p>
                                <p class="text-sm text-base-content/60">Quartier Bastos, Rue 1234</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-6 bg-base-200 rounded-xl shadow-sm hover:shadow-md transition">
                            <div class="w-12 h-12 rounded-full bg-primary text-primary-content flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">{{ __('Email') }}</h3>
                                <a href="mailto:contact@newday.org" class="link link-hover text-primary font-medium text-lg">contact@newday.org</a>
                                <p class="text-sm text-base-content/60 mt-1">{{ __('Réponse sous 24h ouvrées') }}</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-6 bg-base-200 rounded-xl shadow-sm hover:shadow-md transition">
                            <div class="w-12 h-12 rounded-full bg-primary text-primary-content flex items-center justify-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg mb-1">{{ __('Téléphone') }}</h3>
                                <a href="tel:+237000000000" class="link link-hover text-primary font-medium text-lg">+237 000 000 000</a>
                                <p class="text-sm text-base-content/60 mt-1">{{ __('Lun - Ven, 9h - 17h') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="card bg-base-100 shadow-2xl border border-base-200" data-aos="fade-left">
                    <div class="card-body p-8">
                        <h2 class="card-title text-2xl font-bold mb-6">{{ __('Envoyez-nous un message') }}</h2>
                        <form method="POST" action="{{ route('web.contact.store') }}" class="space-y-4">
                            @csrf
                            <div class="form-control">
                                <label class="label"><span class="label-text font-semibold">{{ __('Votre nom complet') }}</span></label>
                                <input type="text" name="name" class="input input-bordered w-full focus:input-primary bg-base-200" placeholder="Jean Dupont" required />
                                @error('name') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text font-semibold">{{ __('Votre adresse email') }}</span></label>
                                <input type="email" name="email" class="input input-bordered w-full focus:input-primary bg-base-200" placeholder="jean@example.com" required />
                                @error('email') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text font-semibold">{{ __('Sujet') }}</span></label>
                                <input type="text" name="subject" class="input input-bordered w-full focus:input-primary bg-base-200" placeholder="Demande d'information" />
                            </div>

                            <div class="form-control">
                                <label class="label"><span class="label-text font-semibold">{{ __('Votre message') }}</span></label>
                                <textarea name="message" class="textarea textarea-bordered h-32 w-full focus:textarea-primary bg-base-200" placeholder="Bonjour, je souhaiterais..." required></textarea>
                                @error('message') <span class="text-error text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-control mt-6">
                                <button type="submit" class="btn btn-primary btn-block uppercase tracking-wide shadow-md">
                                    {{ __('Envoyer le message') }}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
