@extends('layouts.app')

@section('title', __('Actualités') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1504711434969-e33886168f5c?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Actualités & Événements') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Restez informés de nos dernières actions, de nos événements et des avancées de nos projets sur le terrain.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="py-16 px-4 max-w-7xl mx-auto">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($news as $index => $post)
                <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 border border-base-200 flex flex-col h-full" data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}">
                    <figure class="h-56 overflow-hidden relative">
                        @if($post->image)
                            <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="object-cover w-full h-full transform hover:scale-110 transition duration-500" />
                        @else
                            <div class="w-full h-full bg-neutral flex items-center justify-center text-neutral-content">
                                <span class="text-4xl font-bold opacity-30">NEWS</span>
                            </div>
                        @endif
                        <div class="absolute bottom-0 left-0 bg-primary text-primary-content px-3 py-1 text-sm font-semibold">
                            {{ $post->published_at->format('d M Y') }}
                        </div>
                    </figure>
                    <div class="card-body flex-grow">
                        <h3 class="card-title text-xl font-bold mb-3 hover:text-primary transition line-clamp-2">
                            <a href="{{ route('web.news.show', ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}">
                                {{ $post->title }}
                            </a>
                        </h3>
                        <p class="text-base-content/70 line-clamp-3 mb-4">
                            {{ $post->excerpt }}
                        </p>
                        <div class="card-actions justify-end mt-auto">
                            <a href="{{ route('web.news.show', ['locale' => app()->getLocale(), 'slug' => $post->slug]) }}" class="link link-primary font-semibold hover:no-underline">
                                {{ __('Lire la suite') }} &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-base-content/30 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    <p class="text-xl font-semibold text-base-content/60">{{ __('Aucune actualité pour le moment.') }}</p>
                </div>
            @endforelse
        </div>

        <div class="mt-12 flex justify-center">
            {{ $news->links() }}
        </div>
    </section>
@endsection
