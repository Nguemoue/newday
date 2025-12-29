{{--
  Home page for the New Day website.
  Dynamic version using data from the database.
--}}

@extends('layouts.app')

@section('title', __('New Day | Accueil'))

@section('hero')
    @include('layouts.partials.hero')
@endsection

@section('content')
    {{-- About Section --}}
    <section id="about" class="py-16 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary" data-aos="fade-right">{{ __('Qui sommes‑nous ?') }}</h2>
            <div class="md:grid md:grid-cols-2 gap-8">
                <p class="mb-4 text-base-content/80 text-lg leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                    {{ __('New Day est une ONG légalement reconnue au Cameroun. Nous œuvrons pour l’inclusion sociale et économique des personnes sourdes et malentendantes en leur offrant des formations professionnelles de qualité et un accompagnement personnalisé. Notre vision est de construire une société où chaque personne malentendante peut vivre dignement de son travail et être pleinement intégrée à la communauté.') }}
                </p>
                <div data-aos="fade-up" data-aos-delay="200">
                    <p class="mb-4 text-base-content/80 text-lg leading-relaxed">
                        {{ __('Grâce à un réseau de formateurs, d’interprètes en langue des signes, de partenaires et de bénévoles, nous proposons des ateliers et des programmes adaptés aux besoins de nos bénéficiaires. Nous menons également des actions de sensibilisation auprès des parents, des entreprises et des institutions pour promouvoir l’égalité des chances et combattre les préjugés liés au handicap auditif.') }}
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('web.about', ['locale' => app()->getLocale()]) }}" class="btn btn-outline btn-primary">{{ __('En savoir plus') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Programmes Section --}}
    <section id="programs" class="py-16 bg-base-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-end mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-primary" data-aos="fade-right">{{ __('Nos programmes') }}</h2>
                <a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}" class="btn btn-link text-primary hidden md:flex" data-aos="fade-left">{{ __('Voir tout') }} &rarr;</a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($programs as $index => $program)
                <div class="card bg-base-100 shadow-md hover:shadow-xl transition duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    @if($program->image)
                    <figure class="h-48 overflow-hidden">
                        <img src="{{ asset('storage/'.$program->image) }}" alt="{{ $program->title }}" class="object-cover w-full h-full transform transition duration-500 hover:scale-110" />
                    </figure>
                    @endif
                    <div class="card-body">
                        <h3 class="card-title font-bold text-lg">{{ $program->title }}</h3>
                        <p class="line-clamp-3 text-base-content/70">{{ $program->description }}</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => $program->slug]) }}" class="btn btn-outline btn-primary btn-sm">{{ __('En savoir plus') }}</a>
                        </div>
                    </div>
                </div>
                @empty
                    <p class="col-span-3 text-center italic py-10">{{ __('Aucun programme affiché pour le moment.') }}</p>
                @endforelse
            </div>
            <div class="text-center mt-10 md:hidden">
                <a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary uppercase">{{ __('Voir tous les programmes') }}</a>
            </div>
        </div>
    </section>

    {{-- Impact Section --}}
    <section id="impact" class="py-16 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary" data-aos="fade-down">{{ __('Notre impact') }}</h2>
            <p class="mb-8 max-w-3xl text-base-content/80 text-lg" data-aos="fade-up">
                {{ __('Grâce à votre soutien et à l’engagement de nos partenaires, nous changeons la vie de nombreuses personnes sourdes et malentendantes. Voici quelques chiffres clés illustrant nos actions.') }}
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @forelse($impactStats as $index => $stat)
                <div class="stat bg-base-200 shadow rounded-lg" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}">
                    <div class="stat-title uppercase font-semibold text-base-content/60">{{ $stat->title }}</div>
                    <div class="stat-value text-3xl md:text-4xl text-primary my-2">{{ $stat->value }}</div>
                    @if($stat->description)
                    <div class="stat-desc">{{ $stat->description }}</div>
                    @endif
                </div>
                @empty
                    <p class="col-span-4 text-center italic">{{ __('Données en cours de mise à jour.') }}</p>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Testimonials Section (Swiper) --}}
    <section id="stories" class="py-16 bg-base-200 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-primary" data-aos="fade-right">{{ __('Témoignages') }}</h2>

            <div class="swiper testimonial-swiper pb-10" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @forelse($testimonials as $testimonial)
                    <div class="swiper-slide h-auto">
                        <div class="card bg-base-100 shadow-lg h-full border border-base-300">
                            <div class="card-body">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="avatar placeholder">
                                        <div class="bg-primary text-primary-content rounded-full w-12 h-12">
                                            @if($testimonial->photo)
                                                <img src="{{ asset('storage/'.$testimonial->photo) }}" alt="{{ $testimonial->name }}" />
                                            @else
                                                <span class="text-xl font-bold">{{ substr($testimonial->name, 0, 1) }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-bold text-lg">{{ $testimonial->name }}</div>
                                        <div class="text-xs text-base-content/60 uppercase tracking-wide">{{ $testimonial->role }}</div>
                                    </div>
                                </div>
                                <blockquote class="text-base-content/80 italic text-lg leading-relaxed">
                                    “{{ Str::limit($testimonial->content, 200) }}”
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="swiper-slide">
                            <div class="p-10 text-center italic">{{ __('Aucun témoignage pour l’instant.') }}</div>
                        </div>
                    @endforelse
                </div>
                <div class="swiper-pagination !bottom-0"></div>
            </div>

            <div class="text-center mt-6">
                <a href="{{ route('web.stories', ['locale' => app()->getLocale()]) }}" class="link link-primary font-semibold hover:text-secondary transition">{{ __('Lire plus d’histoires') }} &rarr;</a>
            </div>
        </div>
    </section>

    {{-- Partners Section --}}
    <section id="partners" class="py-16 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center text-primary" data-aos="fade-up">{{ __('Nos partenaires') }}</h2>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                @forelse($partners as $index => $partner)
                <a href="{{ $partner->website ?? '#' }}" target="_blank" class="group bg-base-200 rounded-lg p-6 flex items-center justify-center hover:bg-base-300 transition duration-300" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    @if($partner->logo)
                        <img src="{{ asset('storage/'.$partner->logo) }}" alt="{{ $partner->name }}" class="max-h-16 max-w-full grayscale group-hover:grayscale-0 transition duration-300 opacity-70 group-hover:opacity-100" />
                    @else
                        <span class="font-semibold text-center text-base-content/70 group-hover:text-primary transition">{{ $partner->name }}</span>
                    @endif
                </a>
                @empty
                    <p class="col-span-full text-center italic">{{ __('Nos partenaires seront bientôt affichés ici.') }}</p>
                @endforelse
            </div>
        </div>
    </section>

    {{-- Support / Call to Action Section --}}
    <section id="support" class="py-20 bg-primary text-primary-content text-center relative overflow-hidden">
        {{-- Background decorative element --}}
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cube-coat.png')]"></div>

        <div class="relative max-w-4xl mx-auto px-4" data-aos="zoom-in">
            <h2 class="text-3xl md:text-5xl font-bold mb-6">{{ __('Soutenez notre mission') }}</h2>
            <p class="mb-10 text-lg md:text-xl max-w-2xl mx-auto opacity-90">
                {{ __('Votre générosité nous permet d’offrir des formations, du matériel et un accompagnement personnalisé à nos bénéficiaires. Rejoignez‑nous pour offrir un nouveau départ.') }}
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
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
