<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

class FrontendContactController
{

    public function show()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {

    }

}
