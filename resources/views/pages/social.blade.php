@extends('layouts.app')

@section('title', __('Nos Réseaux Sociaux') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Suivez-nous') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Restez connectés avec New Day sur toutes nos plateformes pour ne rien manquer de nos actualités.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="py-16 px-4 max-w-4xl mx-auto">
        <div class="grid gap-6 sm:grid-cols-2">
            @forelse ($socialLinks as $index => $link)
                <a href="{{ $link->url }}" target="_blank" class="card bg-base-100 shadow-lg hover:shadow-2xl transition-all duration-300 border border-base-200 group" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="card-body flex-row items-center gap-6">
                        {{-- Icon Container --}}
                        <div class="w-16 h-16 rounded-full flex items-center justify-center text-white text-3xl shadow-md transform group-hover:scale-110 transition duration-300" style="background-color: {{ $link->platform_color }}">
                            @switch(strtolower($link->platform))
                                @case('facebook') <x-icon-facebook class="w-8 h-8" /> @break
                                @case('linkedin') <x-icon-linkedin class="w-8 h-8" /> @break
                                @case('twitter') <x-icon-twitter class="w-8 h-8" /> @break
                                @case('instagram') <x-icon-instagram class="w-8 h-8" /> @break
                                @case('whatsapp') <x-icon-whatsapp class="w-8 h-8" /> @break
                                @case('telegram') <x-icon-telegram class="w-8 h-8" /> @break
                                @case('youtube') <x-icon-youtube class="w-8 h-8" /> @break
                                @default <span class="font-bold text-lg">{{ substr($link->platform, 0, 1) }}</span>
                            @endswitch
                        </div>

                        {{-- Text Content --}}
                        <div>
                            <h3 class="card-title text-xl font-bold group-hover:text-primary transition">{{ $link->platform }}</h3>
                            @if($link->username)
                                <p class="text-base-content/60 font-medium">{{ $link->username }}</p>
                            @else
                                <p class="text-base-content/60 text-sm">{{ __('Rejoindre la communauté') }}</p>
                            @endif
                        </div>

                        {{-- Arrow --}}
                        <div class="ml-auto opacity-0 group-hover:opacity-100 transition transform translate-x-[-10px] group-hover:translate-x-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-base-content/40" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-full text-center py-20">
                    <p class="text-xl text-base-content/60 italic">{{ __('Nos réseaux sociaux seront bientôt disponibles.') }}</p>
                </div>
            @endforelse
        </div>

        {{-- QR Code Section (Optional Idea) --}}
        <div class="mt-16 text-center bg-base-200 rounded-3xl p-10" data-aos="zoom-in">
            <h2 class="text-2xl font-bold mb-4">{{ __('Partagez cette page') }}</h2>
            <p class="mb-6 text-base-content/70">{{ __('Invitez vos amis à découvrir notre mission.') }}</p>
            <div class="flex justify-center gap-4">
                {{-- Social Share Buttons --}}
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank" class="btn btn-circle btn-ghost bg-blue-600 text-white hover:bg-blue-700">
                    <x-icon-facebook class="w-5 h-5" />
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode('Découvrez New Day ONG !') }}" target="_blank" class="btn btn-circle btn-ghost bg-black text-white hover:bg-gray-800">
                    <x-icon-twitter class="w-5 h-5" />
                </a>
                <a href="https://wa.me/?text={{ urlencode('Découvrez New Day ONG : ' . request()->url()) }}" target="_blank" class="btn btn-circle btn-ghost bg-green-500 text-white hover:bg-green-600">
                    <x-icon-whatsapp class="w-5 h-5" />
                </a>
            </div>
        </div>
    </section>
@endsection
