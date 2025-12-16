{{--
  Home page for the New Day website.  This view extends the default app layout
  and includes a hero section followed by several content sections tailored
  to an NGO: about/mission, programmes, impact statistics, testimonials,
  partners, and a call to action.  Adjust the images, text and routes
  according to your needs.
--}}

@extends('layouts.app')

@section('title', __('New Day | Accueil'))

@section('page_header')
    {{-- Hero Section --}}
    <section class="relative min-h-[65vh] flex items-center justify-center text-neutral-content" style="background-image: url('https://images.unsplash.com/photo-1504439468489-c8920d796a29?auto=format&fit=crop&w=1400&q=80');">
        <div class="absolute inset-0 bg-gray-900/60"></div>
        <div class="relative z-10 text-center px-4 max-w-2xl">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight">
                Un nouveau départ pour les personnes malentendantes
            </h1>
            <p class="text-lg md:text-xl mb-6">
                Aidez‑nous à construire une société inclusive en offrant des formations
                qualifiantes et un soutien durable.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary btn-sm sm:btn-md uppercase">
                    Découvrir nos programmes
                </a>
                <a href="{{ route('web.donate', ['locale' => app()->getLocale()]) }}" class="btn btn-primary btn-sm sm:btn-md uppercase">
                    Faire un don
                </a>
            </div>
        </div>
    </section>
@endsection

@section('content')
    {{-- About Section --}}
    <section id="about" class="py-16 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Qui sommes‑nous&nbsp;?</h2>
            <div class="md:grid md:grid-cols-2 gap-8">
                <p class="mb-4 text-base-content/80">
                    New Day est une ONG légalement reconnue au Cameroun. Nous œuvrons pour
                    l’inclusion sociale et économique des personnes sourdes et malentendantes
                    en leur offrant des formations professionnelles de qualité et un
                    accompagnement personnalisé. Notre vision est de construire une
                    société où chaque personne malentendante peut vivre dignement de son
                    travail et être pleinement intégrée à la communauté.
                </p>
                <p class="mb-4 text-base-content/80">
                    Grâce à un réseau de formateurs, d’interprètes en langue des signes,
                    de partenaires et de bénévoles, nous proposons des ateliers et des
                    programmes adaptés aux besoins de nos bénéficiaires. Nous menons
                    également des actions de sensibilisation auprès des parents, des
                    entreprises et des institutions pour promouvoir l’égalité des chances
                    et combattre les préjugés liés au handicap auditif.
                </p>
            </div>
        </div>
    </section>

    {{-- Programmes Section --}}
    <section id="programs" class="py-16 bg-base-200">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-8 text-primary">Nos programmes</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Programme Card --}}
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h3 class="card-title font-bold">Couture</h3>
                        <p>Apprenez à confectionner des vêtements et des accessoires grâce à des cours de couture adaptés.</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => 'couture']) }}" class="btn btn-outline btn-primary btn-sm">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h3 class="card-title font-bold">Tissage</h3>
                        <p>Maîtrisez les techniques de tissage pour créer des pièces uniques et développer votre créativité.</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => 'tissage']) }}" class="btn btn-outline btn-primary btn-sm">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h3 class="card-title font-bold">Maroquinerie</h3>
                        <p>Apprenez à travailler le cuir et à réaliser des articles de maroquinerie de haute qualité.</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => 'maroquinerie']) }}" class="btn btn-outline btn-primary btn-sm">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h3 class="card-title font-bold">Perlage</h3>
                        <p>Réalisez des bijoux et des objets décoratifs en maîtrisant les techniques de perlage.</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => 'perlage']) }}" class="btn btn-outline btn-primary btn-sm">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h3 class="card-title font-bold">Salon de coiffure / Onglerie</h3>
                        <p>Formez‑vous aux métiers de la beauté : coiffure, soins des ongles et maquillage professionnels.</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => 'coiffure']) }}" class="btn btn-outline btn-primary btn-sm">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 shadow-md">
                    <div class="card-body">
                        <h3 class="card-title font-bold">Pisciculture / Élevage</h3>
                        <p>Initiez‑vous à l’élevage et à la pisciculture pour développer des activités génératrices de revenus.</p>
                        <div class="card-actions justify-end mt-4">
                            <a href="{{ route('web.programs.show', ['locale' => app()->getLocale(), 'slug' => 'pisciculture']) }}" class="btn btn-outline btn-primary btn-sm">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Impact Section --}}
    <section id="impact" class="py-16 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Notre impact</h2>
            <p class="mb-8 max-w-3xl text-base-content/80">
                Grâce à votre soutien et à l’engagement de nos partenaires, nous changeons la vie de nombreuses personnes sourdes et malentendantes. Voici quelques chiffres clés illustrant nos actions.
            </p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="stat bg-base-200 shadow">
                    <div class="stat-title uppercase">Personnes formées</div>
                    <div class="stat-value text-3xl text-primary">125+</div>
                    <div class="stat-desc">Depuis 2023</div>
                </div>
                <div class="stat bg-base-200 shadow">
                    <div class="stat-title uppercase">Programmes</div>
                    <div class="stat-value text-3xl text-primary">7</div>
                    <div class="stat-desc">Métiers différents</div>
                </div>
                <div class="stat bg-base-200 shadow">
                    <div class="stat-title uppercase">Taux d’insertion</div>
                    <div class="stat-value text-3xl text-primary">90%</div>
                    <div class="stat-desc">À l’issue des formations</div>
                </div>
                <div class="stat bg-base-200 shadow">
                    <div class="stat-title uppercase">Partenaires</div>
                    <div class="stat-value text-3xl text-primary">15+</div>
                    <div class="stat-desc">Institutions et ONG</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials Section --}}
    <section id="stories" class="py-16 bg-base-200">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Témoignages</h2>
            <div class="carousel space-x-6 pb-6">
                <div class="carousel-item">
                    <div class="card w-80 bg-base-100 shadow-lg">
                        <div class="card-body">
                            <p class="text-base-content/70">“Grâce à New Day, j’ai appris la couture et je peux maintenant subvenir à mes besoins et aider ma famille.”</p>
                            <div class="mt-4 font-semibold">— Amina, ancienne bénéficiaire</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card w-80 bg-base-100 shadow-lg">
                        <div class="card-body">
                            <p class="text-base-content/70">“La formation en tissage m’a donné confiance en moi et m’a permis d’ouvrir un atelier.”</p>
                            <div class="mt-4 font-semibold">— Paul, bénéficiaire</div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card w-80 bg-base-100 shadow-lg">
                        <div class="card-body">
                            <p class="text-base-content/70">“Je ne savais pas que je pouvais réussir. Aujourd’hui, je fais de la maroquinerie et je vends mes créations.”</p>
                            <div class="mt-4 font-semibold">— Linda, bénéficiaire</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Partners Section --}}
    <section id="partners" class="py-16 bg-base-100">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-6 text-primary">Nos partenaires</h2>
            <p class="mb-8 max-w-3xl text-base-content/80">
                Nous travaillons main dans la main avec des organisations publiques et privées pour maximiser notre impact. Voici quelques‑uns de nos partenaires.
            </p>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                <div class="bg-base-200 rounded-lg p-6 flex items-center justify-center">
                    <span class="font-semibold">Ministère des Affaires Sociales</span>
                </div>
                <div class="bg-base-200 rounded-lg p-6 flex items-center justify-center">
                    <span class="font-semibold">Mairie de Yaoundé 6</span>
                </div>
                <div class="bg-base-200 rounded-lg p-6 flex items-center justify-center">
                    <span class="font-semibold">ONG Locale 1</span>
                </div>
                <div class="bg-base-200 rounded-lg p-6 flex items-center justify-center">
                    <span class="font-semibold">Entreprise A</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Support / Call to Action Section --}}
    <section id="support" class="py-16 bg-primary text-primary-content text-center">
        <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Soutenez notre mission</h2>
            <p class="mb-8">
                Votre générosité nous permet d’offrir des formations, du matériel et un accompagnement personnalisé à nos bénéficiaires. Rejoignez‑nous pour offrir un nouveau départ.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('web.donate', ['locale' => app()->getLocale()]) }}" class="btn btn-secondary sm:btn-md">
                    Faire un don
                </a>
                <a href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}" class="btn btn-outline sm:btn-md">
                    Devenir bénévole
                </a>
                <a href="{{ route('web.partners', ['locale' => app()->getLocale()]) }}" class="btn btn-outline sm:btn-md">
                    Devenir partenaire
                </a>
            </div>
        </div>
    </section>
@endsection
