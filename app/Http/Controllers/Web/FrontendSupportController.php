<?php

namespace App\Http\Controllers\Web;

class FrontendSupportController
{
    public function donate()
    {
        return view('pages.donate');
    }

    public function volunteer()
    {
        return view('pages.volunteer');
    }
}
