<footer class="bg-base-100 border-t border-base-300 mt-auto">
    <div class="max-w-7xl mx-auto px-4 py-12 grid sm:grid-cols-2 md:grid-cols-4 gap-8">
        <div>
            <h3 class="font-bold text-lg mb-2">À propos</h3>
            <p class="text-sm leading-relaxed">{{config('app.name')}} est une ONG engagée dans l’aide humanitaire et le développement durable. Nous intervenons dans plus de 40 pays pour soutenir les populations les plus vulnérables.</p>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-2">Navigation</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="{{ route('web.about', ['locale' => app()->getLocale()]) }}" class="link link-hover">{{ __('nav.about') }}</a></li>
                <li><a href="{{ route('web.programs', ['locale' => app()->getLocale()]) }}" class="link link-hover">{{ __('nav.programs') }}</a></li>
                <li><a href="{{ route('web.impact', ['locale' => app()->getLocale()]) }}" class="link link-hover">{{ __('nav.impact') }}</a></li>
                <li><a href="{{ route('web.news.index', ['locale' => app()->getLocale()]) }}" class="link link-hover">{{ __('nav.news') }}</a></li>
                <li><a href="{{ route('web.contact', ['locale' => app()->getLocale()]) }}" class="link link-hover">{{ __('nav.contact') }}</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-2">Ressources</h3>
            <ul class="space-y-1 text-sm">
                <li><a href="#" class="link link-hover">Appels d’offres</a></li>
                <li><a href="#" class="link link-hover">Rapport annuel</a></li>
                <li><a href="#" class="link link-hover">Politique de confidentialité</a></li>
                <li><a href="{{ route('web.volunteer', ['locale' => app()->getLocale()]) }}" class="link link-hover">{{ __('nav.volunteer') }}</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-2">Contact</h3>
            <p class="text-sm">Paris, France</p>
            <p class="text-sm"><a href="mailto:info@acted.org" class="link link-hover">{{config('project_configuration.contact_email')}}</a></p>
            <div class="flex gap-2 mt-2">
                <a href="#" class="btn btn-square btn-xs btn-ghost" aria-label="Facebook">
                    <x-icon-facebook class="w-3 h-3" />
                </a>
                <a href="#" class="btn btn-square btn-xs btn-ghost" aria-label="Twitter">
                    <x-icon-twitter class="w-3 h-3" />
                </a>
                <a href="#" class="btn btn-square btn-xs btn-ghost" aria-label="LinkedIn">
                    <x-icon-linkedin class="w-3 h-3" />
                </a>
            </div>
        </div>
    </div>
    <div class="border-t border-base-300 text-center py-4 text-xs">
        &copy; {{ date('Y') }} {{config('app.name')}}. Tous droits réservés.
    </div>
</footer>
