<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class FrontendHomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home');
    }
}
