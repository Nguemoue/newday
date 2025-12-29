@extends('layouts.app')

@section('title', __('Notre Impact') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Notre Impact') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Au-delà des chiffres, ce sont des vies transformées, des barrières brisées et un avenir meilleur pour la communauté malentendante.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="py-16 px-4 max-w-7xl mx-auto">
        {{-- Stats Grid --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4 mb-16">
            @forelse ($impactStats as $index => $stat)
                <div class="stat bg-base-100 shadow-xl rounded-2xl border border-base-200 p-8 text-center transform hover:-translate-y-2 transition duration-300" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <div class="stat-title font-bold uppercase tracking-wider text-base-content/60 mb-2">{{ $stat->title }}</div>
                    <div class="stat-value text-primary text-5xl md:text-6xl font-extrabold mb-2">{{ $stat->value }}</div>
                    <div class="stat-desc text-base-content/80 font-medium">{{ $stat->description }}</div>
                </div>
            @empty
                <p class="col-span-full text-center py-10 italic text-base-content/60">
                    {{ __('Données en cours de mise à jour.') }}
                </p>
            @endforelse
        </div>

        {{-- Qualitative Impact Section --}}
        <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
            <div data-aos="fade-right">
                <h2 class="text-3xl font-bold mb-6 text-primary">{{ __('Changer des vies, concrètement') }}</h2>
                <p class="text-lg text-base-content/80 mb-4 leading-relaxed">
                    {{ __('Notre impact ne se mesure pas seulement en nombre de diplômés. Il se voit dans la confiance retrouvée d’un jeune qui apprend un métier, dans la fierté d’un parent qui voit son enfant s’épanouir, et dans l’ouverture d’esprit des employeurs qui découvrent le potentiel des personnes sourdes.') }}
                </p>
                <p class="text-lg text-base-content/80 leading-relaxed">
                    {{ __('Grâce à nos programmes de sensibilisation, nous réduisons la stigmatisation et favorisons une véritable inclusion sociale.') }}
                </p>
            </div>
            <div class="relative h-80 rounded-2xl overflow-hidden shadow-2xl" data-aos="fade-left">
                <img src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?auto=format&fit=crop&w=800&q=80" alt="Impact social" class="object-cover w-full h-full" />
            </div>
        </div>

        {{-- Call to Action --}}
        <div class="bg-secondary text-secondary-content rounded-3xl p-10 text-center shadow-lg" data-aos="fade-up">
            <h2 class="text-2xl md:text-3xl font-bold mb-4">{{ __('Aidez-nous à amplifier notre impact') }}</h2>
            <p class="mb-8 text-lg opacity-90 max-w-2xl mx-auto">
                {{ __('Votre soutien est essentiel pour nous permettre de toucher encore plus de bénéficiaires et d’étendre nos actions à travers le pays.') }}
            </p>
            <a href="{{ route('web.donate', ['locale' => app()->getLocale()]) }}" class="btn btn-primary btn-lg shadow-md border-2 border-transparent hover:border-white">
                {{ __('Faire un don aujourd’hui') }}
            </a>
        </div>
    </section>
@endsection
