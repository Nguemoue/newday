<?php

namespace App\Http\Controllers\Web;

class FrontendStoryController
{
    public function __invoke()
    {
        return view('pages.stories.index');
    }
}
