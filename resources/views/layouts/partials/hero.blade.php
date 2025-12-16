<section class="relative">
    <div class="carousel w-full h-[65vh]">
        {{-- Slide 1 : Mission --}}
        <div id="slide1" class="carousel-item relative w-full">
            <img src="https://images.unsplash.com/photo-1764712754791-8627ebded3f6?q=80&w=1980&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                 class="w-full object-cover"
                 alt="New Day training program"/>
            <div class="absolute inset-0 bg-gray-900/70 flex flex-col items-center justify-center text-center px-4">
                <span class="badge badge-secondary mb-4 py-3 px-5 text-xs font-medium tracking-wide uppercase">
                    {{ __('Mission') }}
                </span>
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight text-white">
                    {{ __('Un nouveau départ pour les personnes malentendantes') }}
                </h1>
                <p class="text-2xl font-semibold mb-6 uppercase text-white">
                    {{ __('Formation, dignité et intégration sociale') }}
                </p>
                <a href="{{ route('web.about', ['locale' => app()->getLocale()]) }}"
                   class="btn btn-outline btn-secondary rounded-none uppercase">
                    {{ __('Découvrir la mission') }}
                </a>
            </div>
            <a href="#slide2"
               class="btn btn-circle btn-sm absolute right-5 top-1/2 -translate-y-1/2">
                ❯
            </a>
        </div>

        {{-- Slide 2 : Programmes --}}
        <div id="slide2" class="carousel-item relative w-full">
            <img src="https://images.unsplash.com/photo-1486218119243-13883505764c?auto=format&fit=crop&w=1600&q=80"
                 class="w-full object-cover"
                 alt="New Day formation programmes"/>
            <div class="absolute inset-0 bg-gray-900/70 flex flex-col items-center justify-center text-center px-4">
                <span class="badge badge-secondary mb-4 py-3 px-5 text-xs font-medium tracking-wide uppercase">
                    {{ __('Programmes') }}
                </span>
                <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight text-white">
                    {{ __('Des formations qualifiantes : couture, tissage, maroquinerie…') }}
                </h1>
                <p class="text-2xl font-semibold mb-6 uppercase text-white">
                    {{ __('Des compétences pour l’autonomie économique') }}
                </p>
                <a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}"
                   class="btn btn-outline btn-secondary rounded-none uppercase">
                    {{ __('Explorer nos formations') }}
                </a>
            </div>
            <a href="#slide1"
               class="btn btn-circle btn-sm absolute right-5 top-1/2 -translate-y-1/2">
                ❯
            </a>
        </div>
    </div>
</section>
