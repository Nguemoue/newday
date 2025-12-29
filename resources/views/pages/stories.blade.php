@extends('layouts.app')

@section('title', __('Témoignages') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Histoires de Réussite') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Découvrez les parcours inspirants de nos bénéficiaires. Leurs succès sont notre plus grande fierté et la preuve que le handicap n’est pas une fatalité.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="py-16 px-4 max-w-7xl mx-auto">
        <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">
            @forelse ($stories as $index => $story)
                <div class="card bg-base-100 shadow-xl break-inside-avoid-column border border-base-200 hover:shadow-2xl transition duration-300" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <div class="card-body">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="avatar placeholder">
                                <div class="bg-primary text-primary-content rounded-full w-16 h-16 shadow-md">
                                    @if($story->photo)
                                        <img src="{{ asset('storage/'.$story->photo) }}" alt="{{ $story->name }}" />
                                    @else
                                        <span class="text-2xl font-bold">{{ substr($story->name, 0, 1) }}</span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">{{ $story->name }}</h3>
                                <p class="text-sm font-medium text-primary uppercase tracking-wide">{{ $story->role }}</p>
                            </div>
                        </div>
                        <div class="relative">
                            <svg class="absolute top-0 left-0 transform -translate-x-2 -translate-y-4 h-8 w-8 text-base-200" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.552-7.104 6.624-9.024L25.864 4z" />
                            </svg>
                            <p class="relative z-10 italic text-base-content/80 text-lg leading-relaxed pl-4">
                                “{{ $story->content }}”
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20">
                    <p class="text-xl text-base-content/60 italic">{{ __('Aucun témoignage pour le moment.') }}</p>
                </div>
            @endforelse
        </div>

        <div class="mt-16 text-center" data-aos="fade-up">
            <h3 class="text-2xl font-bold mb-4">{{ __('Vous avez une histoire à partager ?') }}</h3>
            <p class="mb-6 text-base-content/70">{{ __('Si vous êtes un ancien bénéficiaire ou un partenaire, votre témoignage peut inspirer d’autres personnes.') }}</p>
            <a href="{{ route('web.contact', ['locale' => app()->getLocale()]) }}" class="btn btn-outline btn-primary">
                {{ __('Contactez-nous') }}
            </a>
        </div>
    </section>
@endsection
