<?php

namespace App\Http\Controllers\Web;

class FrontendTeamController
{

    public function __invoke()
    {
        return view('pages.team');
    }
}
