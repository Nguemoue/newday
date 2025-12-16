<?php

namespace App\Http\Controllers\Web;

class FrontendAboutController
{
    public function __invoke()
    {
        return view('pages.about');
    }
}
