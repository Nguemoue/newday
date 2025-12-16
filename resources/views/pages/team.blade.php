{{--
    Team page for New Day ONG.

    This view lists the members of the organisation, including board members, educators and
    volunteers. It expects a collection `$teamMembers` passed from the controller.
    Each member is displayed with a photo, name, role and short bio. If no photo is
    available, a placeholder image is used. DaisyUI cards are used for styling.
--}}

@extends('layouts.app')

@section('title', __('Notre équipe') . ' | ' . __('layout.site_title'))

@section('page_header')
    <h1 class="text-3xl md:text-4xl font-bold mb-1">
        {{ __('Notre équipe') }}
    </h1>
    <p class="text-base-content/70">
        {{ __('Découvrez les personnes qui œuvrent chaque jour pour offrir un nouveau départ aux personnes malentendantes.') }}
    </p>
@endsection

@section('content')
    <section class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($teamMembers ?? [] as $member)
            <div class="card bg-base-100 shadow-md hover:shadow-xl transition duration-200">
                <figure class="relative h-56 overflow-hidden">
                    @if($member->photo)
                        <img src="{{ asset('storage/'.$member->photo) }}" alt="{{ $member->name }}" class="object-cover w-full h-full" />
                    @else
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=800&q=80" alt="placeholder" class="object-cover w-full h-full" />
                    @endif
                </figure>
                <div class="card-body">
                    <h3 class="card-title text-xl font-bold">
                        {{ $member->name }}
                    </h3>
                    <p class="text-sm uppercase text-primary font-semibold mb-2">
                        {{ $member->role }}
                    </p>
                    <p class="text-sm text-base-content/70">
                        {{ Str::limit($member->bio, 120) }}
                    </p>
                </div>
            </div>
        @empty
            <p class="col-span-full text-center py-10 text-base-content/70">
                {{ __('Nous n’avons pas encore enregistré les membres de l’équipe. Revenez bientôt !') }}
            </p>
        @endforelse
    </section>

    {{-- Call to action --}}
    <div class="mt-16 text-center bg-primary text-primary-content rounded-lg p-8 space-y-4">
        <h2 class="text-3xl font-bold">{{ __('Rejoignez notre équipe de bénévoles') }}</h2>
        <p class="text-md md:text-lg max-w-3xl mx-auto">
            {{ __('Nous recherchons des personnes passionnées prêtes à s’engager pour l’inclusion des personnes malentendantes. Apportez vos compétences : formation, interprétariat, accompagnement, etc.') }}
        </p>
        <a href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary uppercase">
            {{ __('nav.volunteer') }}
        </a>
    </div>
@endsection
