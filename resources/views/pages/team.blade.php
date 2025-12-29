{{--
    Team page for New Day ONG.
--}}

@extends('layouts.app')

@section('title', __('Notre équipe') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="text-center py-10 bg-base-200" data-aos="fade-down">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">
            {{ __('Notre Équipe') }}
        </h1>
        <p class="text-base-content/70 text-lg max-w-2xl mx-auto px-4">
            {{ __('Rencontrez les hommes et les femmes passionnés qui œuvrent chaque jour pour offrir un avenir meilleur aux personnes malentendantes.') }}
        </p>
    </div>
@endsection

@section('content')
    <section class="py-16 px-4 max-w-7xl mx-auto">
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @forelse ($teamMembers ?? [] as $index => $member)
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition duration-300 border border-base-200" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <figure class="relative h-64 overflow-hidden bg-neutral">
                        @if($member->photo)
                            <img src="{{ asset('storage/'.$member->photo) }}" alt="{{ $member->name }}" class="object-cover w-full h-full transform hover:scale-105 transition duration-500" />
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-primary to-secondary text-primary-content">
                                <span class="text-5xl font-bold opacity-40">{{ substr($member->name, 0, 1) }}</span>
                            </div>
                        @endif
                    </figure>
                    <div class="card-body text-center items-center">
                        <h3 class="card-title text-xl font-bold mb-1">
                            {{ $member->name }}
                        </h3>
                        <div class="badge badge-secondary badge-outline mb-4 uppercase text-xs tracking-wider font-semibold">
                            {{ $member->role }}
                        </div>
                        <p class="text-sm text-base-content/70 leading-relaxed line-clamp-4">
                            {{ $member->bio }}
                        </p>
                        
                        {{-- Social links placeholder --}}
                        <div class="flex gap-4 mt-4 opacity-60">
                            {{-- Add actual social links if available in model --}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center py-20 text-center">
                    <p class="text-xl font-semibold text-base-content/60">{{ __('Nous n’avons pas encore enregistré les membres de l’équipe.') }}</p>
                    <p class="text-base-content/50">{{ __('Revenez bientôt !') }}</p>
                </div>
            @endforelse
        </div>

        {{-- Call to action --}}
        <div class="mt-20 bg-base-200 rounded-3xl p-8 md:p-12 text-center" data-aos="zoom-in">
            <h2 class="text-3xl font-bold mb-6 text-primary">{{ __('Envie de rejoindre l’aventure ?') }}</h2>
            <p class="text-lg text-base-content/80 max-w-2xl mx-auto mb-8">
                {{ __('Nous sommes toujours à la recherche de bénévoles passionnés. Que vous soyez formateur, interprète ou simplement désireux d’aider, votre place est parmi nous.') }}
            </p>
            <a href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}" class="btn btn-primary btn-lg uppercase tracking-wide">
                {{ __('Devenir bénévole') }}
            </a>
        </div>
    </section>
@endsection