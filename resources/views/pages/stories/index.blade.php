{{--
    News/Activities listing page for New Day ONG.

    This view lists the latest activities or descents undertaken by the organisation.
    Each item is presented as a card with a title, excerpt, date and link to a detailed page.
    It expects a collection `$news` (or `$activities`) passed from the controller. DaisyUI
    cards are used for styling.
--}}

@extends('layouts.app')

@section('title', __('nav.news') . ' | ' . __('layout.site_title'))

@section('page_header')
    <h1 class="text-3xl md:text-4xl font-bold mb-1">
        {{ __('Nos actualités') }}
    </h1>
    <p class="text-base-content/70">
        {{ __('Retrouvez ici toutes nos descentes, formations et événements récents.') }}
    </p>
@endsection

@section('content')
    <section class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @forelse ($news ?? [] as $item)
            <article class="card bg-base-100 shadow-md hover:shadow-xl transition duration-200">
                <figure class="relative h-40 overflow-hidden">
                    @if($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}" class="object-cover w-full h-full" />
                    @else
                        <img src="https://images.unsplash.com/photo-1497493292307-31c376b6e479?auto=format&fit=crop&w=800&q=80" alt="placeholder" class="object-cover w-full h-full" />
                    @endif
                </figure>
                <div class="card-body flex flex-col justify-between">
                    <div>
                        <span class="badge badge-outline mb-2 text-xs uppercase">{{ $item->category->name ?? __('Activité') }}</span>
                        <h3 class="card-title text-lg font-semibold mb-2">
                            <a href="{{ route('web.news.show', ['locale' => app()->getLocale(), 'slug' => $item->slug]) }}" class="link-hover">
                                {{ $item->title }}
                            </a>
                        </h3>
                        <p class="text-sm text-base-content/70 line-clamp-3">
                            {{ Str::limit(strip_tags($item->excerpt ?? $item->content), 150) }}
                        </p>
                    </div>
                    <div class="flex items-center justify-between pt-4">
                        <span class="text-xs text-base-content/60">
                            {{ $item->published_at?->format('d/m/Y') ?? $item->created_at->format('d/m/Y') }}
                        </span>
                        <a href="{{ route('web.news.show', ['locale' => app()->getLocale(), 'slug' => $item->slug]) }}" class="btn btn-link btn-sm">
                            {{ __('Lire plus') }}
                        </a>
                    </div>
                </div>
            </article>
        @empty
            <p class="col-span-full text-center py-10 text-base-content/70">
                {{ __('Aucune actualité pour le moment. Revenez bientôt !') }}
            </p>
        @endforelse
    </section>

    {{-- Pagination --}}
    @if(isset($news) && method_exists($news, 'links'))
        <div class="mt-8">
            {{ $news->withQueryString()->links() }}
        </div>
    @endif
@endsection
