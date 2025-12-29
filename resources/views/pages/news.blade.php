{{--
    News/Activities listing page for New Day ONG.
--}}

@extends('layouts.app')

@section('title', __('nav.news') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="text-center py-10 bg-base-200 text-red-100" data-aos="fade-down">
        <h1 class="text-3xl md:text-5xl font-bold mb-4">
            {{ __('Nos Actualités') }}
        </h1>
        <p class="text-base-content/70 text-lg max-w-2xl mx-auto px-4">
            {{ __('Retrouvez ici toutes nos descentes sur le terrain, nos événements et la vie de l’association.') }}
        </p>
    </div>
@endsection

@section('content')

    <section class="py-16 px-4 max-w-7xl mx-auto">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($news as $index => $item)
                <article class="card bg-base-100 shadow-lg hover:shadow-2xl transition duration-300 border border-base-200" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <figure class="relative h-48 overflow-hidden">
                        <a href="{{ route('web.news.show', ['locale' => app()->getLocale(), 'slug' => $item->slug]) }}" class="w-full h-full block">
                            @if($item->image)
                                <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="object-cover w-full h-full transform hover:scale-105 transition duration-500" />
                            @else
                                <div class="w-full h-full bg-neutral flex items-center justify-center text-neutral-content">
                                    <span class="text-3xl font-bold opacity-30">NEW DAY</span>
                                </div>
                            @endif
                        </a>
                        <div class="absolute top-4 left-4 badge badge-secondary shadow-sm">
                            {{ $item->published_at?->format('d M Y') ?? $item->created_at->format('d M Y') }}
                        </div>
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title text-xl font-bold mb-3 leading-tight hover:text-primary transition">
                            <a href="{{ route('web.news.show', ['locale' => app()->getLocale(), 'slug' => $item->slug]) }}">
                                {{ $item->title }}
                            </a>
                        </h3>
                        <p class="text-base-content/70 text-sm line-clamp-3 mb-4">
                            {{ Str::limit(strip_tags($item->excerpt ?? $item->content), 120) }}
                        </p>
                        <div class="card-actions justify-end mt-auto pt-4 border-t border-base-200">
                            <a href="{{ route('web.news.show', ['locale' => app()->getLocale(), 'slug' => $item->slug]) }}" class="btn btn-link btn-sm text-primary no-underline hover:underline px-0">
                                {{ __('Lire la suite') }} &rarr;
                            </a>
                        </div>
                    </div>
                </article>
            @empty
                <div class="col-span-full flex flex-col items-center justify-center py-20 text-center">
                    <p class="text-xl font-semibold text-base-content/60">{{ __('Aucune actualité pour le moment.') }}</p>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        @if(isset($news) && method_exists($news, 'links'))
            <div class="mt-12 flex justify-center">
                {{ $news->withQueryString()->links() }}
            </div>
        @endif
    </section>
@endsection
