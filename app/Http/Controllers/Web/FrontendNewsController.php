<?php

namespace App\Http\Controllers\Web;

class FrontendNewsController
{
    public function __invoke()
    {
        return view('pages.news');
    }
}
