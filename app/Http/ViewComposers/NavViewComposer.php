<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class NavViewComposer
{
    public function compose(View $view)
    {
        $view->with('mainNav', [
            [
                'route' => 'web.home',
                'label' => 'nav.home',
            ],
            [
                'route' => 'web.about',
                'label' => 'nav.about',
            ],
            [
                'route' => 'web.programs',
                'label' => 'nav.programs',
            ],
            [
                'route' => 'web.impact',
                'label' => 'nav.impact',
            ],
            [
                'route' => 'web.stories',
                'label' => 'nav.stories',
            ],
            [
                'route' => 'web.partners',
                'label' => 'nav.partners',
            ],
            [
                'route' => 'web.news.index',
                'label' => 'nav.news',
            ],
            [
                'route' => 'web.contact',
                'label' => 'nav.contact',
            ],
        ]);

    }
}
