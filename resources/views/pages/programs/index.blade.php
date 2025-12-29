@extends('layouts.app')

@section('title', __('Nos Programmes') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="text-center py-10 bg-base-200" data-aos="fade-down">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">
            {{ __('Nos Programmes de Formation') }}
        </h1>
        <p class="text-base-content/70 text-lg max-w-2xl mx-auto px-4">
            {{ __('Découvrez nos formations qualifiantes adaptées aux personnes malentendantes, conçues pour garantir une insertion professionnelle durable.') }}
        </p>
    </div>
@endsection

@section('content')
    <section class="py-16 px-4 max-w-7xl mx-auto">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($programs as $index => $program)
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 border border-base-200" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <figure class="relative h-56 overflow-hidden">
                        @if($program->image)
                            <img src="{{ asset('storage/'.$program->image) }}" alt="{{ $program->title }}" class="object-cover w-full h-full transform hover:scale-110 transition duration-500" />
                        @else
                            <div class="w-full h-full bg-neutral flex items-center justify-center text-neutral-content">
                                <span class="text-4xl font-bold opacity-30">{{ substr($program->title, 0, 1) }}</span>
                            </div>
                        @endif
                        <div class="absolute top-4 right-4 badge badge-primary font-semibold shadow-sm">{{ __('Formation') }}</div>
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title text-2xl font-bold mb-2 hover:text-primary transition">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => $program->slug]) }}">
                                {{ $program->title }}
                            </a>
                        </h3>
                        <p class="text-base-content/70 line-clamp-3 mb-4">
                            {{ $program->description }}
                        </p>
                        <div class="card-actions justify-end mt-auto">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => $program->slug]) }}" class="btn btn-primary btn-sm uppercase tracking-wide">
                                {{ __('En savoir plus') }}
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center py-20 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-base-content/30 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-xl font-semibold text-base-content/60">{{ __('Aucun programme disponible pour le moment.') }}</p>
                    <p class="text-base-content/50">{{ __('Revenez plus tard pour découvrir nos nouvelles formations.') }}</p>
                </div>
            @endforelse
        </div>
    </section>
@endsection