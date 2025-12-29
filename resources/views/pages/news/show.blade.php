@extends('layouts.app')

@section('title', $post->title . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="bg-base-200 py-16" data-aos="fade-in">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center gap-3 mb-6" data-aos="fade-down" data-aos-delay="100">
                <span class="badge badge-primary badge-lg uppercase font-bold tracking-wide">{{ __('Actualité') }}</span>
                <span class="text-base-content/60 font-medium">{{ $post->published_at?->format('d F Y') }}</span>
            </div>
            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight" data-aos="fade-up">
                {{ $post->title }}
            </h1>
            
            {{-- Breadcrumbs --}}
            <nav class="text-sm breadcrumbs justify-center flex text-base-content/60">
                <ul>
                    <li><a href="{{ route('web.home', ['locale' => app()->getLocale()]) }}">{{ __('Accueil') }}</a></li>
                    <li><a href="{{ route('web.news.index', ['locale' => app()->getLocale()]) }}">{{ __('Actualités') }}</a></li>
                    <li><span class="truncate max-w-[200px]">{{ $post->title }}</span></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

@section('content')
    <article class="max-w-4xl mx-auto px-4 py-12">
        <div class="bg-base-100 shadow-xl rounded-2xl overflow-hidden border border-base-200" data-aos="fade-up">
            @if($post->image)
                <figure class="w-full h-72 md:h-[500px] relative">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover" />
                </figure>
            @endif
            
            <div class="p-8 md:p-12">
                <div class="prose prose-lg max-w-none prose-img:rounded-xl">
                    {!! $post->content !!}
                </div>

                {{-- Share / Footer of article --}}
                <div class="mt-12 pt-8 border-t border-base-200 flex flex-col sm:flex-row justify-between items-center gap-6">
                    <div class="flex gap-4">
                        <span class="font-bold text-base-content/70">{{ __('Partager :') }}</span>
                        <button class="btn btn-circle btn-sm btn-ghost hover:bg-blue-100 hover:text-blue-600">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </button>
                        <button class="btn btn-circle btn-sm btn-ghost hover:bg-blue-800 hover:text-white">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.791-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </button>
                    </div>
                    
                    <a href="{{ route('web.news.index', ['locale' => app()->getLocale()]) }}" class="btn btn-outline btn-primary">
                        &larr; {{ __('Retour aux actualités') }}
                    </a>
                </div>
            </div>
        </div>
    </article>
@endsection