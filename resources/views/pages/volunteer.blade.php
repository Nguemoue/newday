@extends('layouts.app')

@section('title', __('Devenir Bénévole') . ' | ' . __('layout.site_title'))

@section('page_header')
    <div class="hero min-h-[40vh] bg-base-200" style="background-image: url('https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=1400&q=80');">
        <div class="hero-overlay bg-opacity-70"></div>
        <div class="hero-content text-center text-neutral-content" data-aos="fade-up">
            <div class="max-w-3xl">
                <h1 class="mb-5 text-4xl md:text-5xl font-bold">{{ __('Devenir Bénévole') }}</h1>
                <p class="mb-5 text-lg opacity-90">
                    {{ __('Rejoignez une communauté engagée et donnez du sens à votre temps en soutenant l’inclusion des personnes malentendantes.') }}
                </p>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="py-16 px-4 max-w-6xl mx-auto space-y-16">

        <section class="text-center space-y-4" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-primary">{{ __('Pourquoi nous rejoindre ?') }}</h2>
            <p class="text-lg text-base-content/80 max-w-3xl mx-auto">
                {{ __('Que vous soyez expert dans un domaine ou simplement animé par la volonté d’aider, votre contribution peut changer la vie d’une personne malentendante. Chez New Day, chaque talent compte.') }}
            </p>
        </section>

        <section class="grid md:grid-cols-3 gap-8">
            <div class="card bg-base-100 shadow-lg hover:shadow-xl transition text-center p-8 border border-base-200" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 rounded-full bg-primary/10 text-primary mx-auto flex items-center justify-center text-4xl mb-6">🤲</div>
                <h3 class="font-bold text-xl mb-3">{{ __('Accompagnement') }}</h3>
                <p class="text-base-content/70">{{ __('Aidez nos bénéficiaires dans leurs démarches administratives, médicales ou professionnelles.') }}</p>
            </div>
            <div class="card bg-base-100 shadow-lg hover:shadow-xl transition text-center p-8 border border-base-200" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 rounded-full bg-secondary/10 text-secondary mx-auto flex items-center justify-center text-4xl mb-6">🎓</div>
                <h3 class="font-bold text-xl mb-3">{{ __('Formation') }}</h3>
                <p class="text-base-content/70">{{ __('Partagez vos compétences : couture, informatique, gestion, artisanat, langue des signes...') }}</p>
            </div>
            <div class="card bg-base-100 shadow-lg hover:shadow-xl transition text-center p-8 border border-base-200" data-aos="fade-up" data-aos-delay="300">
                <div class="w-20 h-20 rounded-full bg-accent/10 text-accent mx-auto flex items-center justify-center text-4xl mb-6">📢</div>
                <h3 class="font-bold text-xl mb-3">{{ __('Communication') }}</h3>
                <p class="text-base-content/70">{{ __('Participez à l’organisation d’événements et à nos campagnes de sensibilisation.') }}</p>
            </div>
        </section>

        <section class="bg-base-200 rounded-3xl p-8 md:p-12 shadow-inner" data-aos="zoom-in">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold mb-2">{{ __('Formulaire de candidature') }}</h2>
                <p class="text-base-content/70">{{ __('Remplissez ce formulaire et nous vous recontacterons très vite pour discuter de votre engagement.') }}</p>
            </div>

            <form action="{{ route('web.contact.store') }}" method="POST" class="max-w-2xl mx-auto space-y-6">
                @csrf
                <input type="hidden" name="subject" value="Candidature Bénévolat">

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="form-control">
                        <label class="label"><span class="label-text font-semibold">{{ __('Nom complet') }}</span></label>
                        <input type="text" name="name" class="input input-bordered w-full bg-base-100 focus:input-primary" required />
                    </div>
                    <div class="form-control">
                        <label class="label"><span class="label-text font-semibold">{{ __('Email') }}</span></label>
                        <input type="email" name="email" class="input input-bordered w-full bg-base-100 focus:input-primary" required />
                    </div>
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text font-semibold">{{ __('Téléphone (WhatsApp)') }}</span></label>
                    <input type="tel" name="phone" class="input input-bordered w-full bg-base-100 focus:input-primary" />
                </div>

                <div class="form-control">
                    <label class="label"><span class="label-text font-semibold">{{ __('Vos compétences / Pourquoi nous rejoindre ?') }}</span></label>
                    <textarea name="message" class="textarea textarea-bordered h-40 bg-base-100 focus:textarea-primary" placeholder="Présentez-vous en quelques mots..." required></textarea>
                </div>

                <div class="form-control mt-4">
                    <button type="submit" class="btn btn-primary btn-lg w-full md:w-auto md:px-12 mx-auto uppercase tracking-wide shadow-lg">
                        {{ __('Envoyer ma candidature') }}
                    </button>
                </div>
            </form>
        </section>
    </div>
@endsection
