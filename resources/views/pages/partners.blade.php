@extends('layouts.app')

@section('title', __('Nos Partenaires') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Nos Partenaires') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Seul on va plus vite, ensemble on va plus loin. Découvrez les organisations et institutions qui rendent notre mission possible.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="py-16 px-4 max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @forelse ($partners as $index => $partner)
                <a href="{{ $partner->website ?? '#' }}" target="_blank" class="group card bg-base-100 shadow-lg hover:shadow-2xl transition-all duration-300 flex items-center justify-center p-8 h-48 border border-base-200" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                    @if($partner->logo)
                        <img src="{{ asset('storage/'.$partner->logo) }}" alt="{{ $partner->name }}" class="max-h-32 max-w-full object-contain filter grayscale opacity-70 group-hover:grayscale-0 group-hover:opacity-100 transition duration-500" />
                    @else
                        <span class="text-xl font-bold text-center text-base-content/60 group-hover:text-primary transition">{{ $partner->name }}</span>
                    @endif
                </a>
            @empty
                <p class="col-span-full text-center py-20 text-xl text-base-content/60 italic">
                    {{ __('Aucun partenaire affiché pour le moment.') }}
                </p>
            @endforelse
        </div>

        {{-- Become a partner CTA --}}
        <div class="mt-20 bg-primary text-primary-content rounded-3xl p-12 text-center shadow-2xl relative overflow-hidden" data-aos="zoom-in">
            <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/diamond-upholstery.png')]"></div>
            <div class="relative z-10">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">{{ __('Devenir Partenaire') }}</h2>
                <p class="mb-8 text-lg md:text-xl max-w-3xl mx-auto opacity-90">
                    {{ __('Vous représentez une entreprise, une institution ou une fondation ? Associez votre image à une cause noble et participez concrètement à l’inclusion sociale au Cameroun.') }}
                </p>
                <a href="{{ route('web.contact', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary btn-lg shadow-lg border-2 border-transparent hover:border-white uppercase tracking-wide">
                    {{ __('Nous contacter pour un partenariat') }}
                </a>
            </div>
        </div>
    </section>
@endsection
