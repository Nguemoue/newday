<?php

namespace App\Http\Controllers\Web;

use App\Models\Testimonial;

class FrontendStoryController
{
    public function __invoke()
    {
        $stories = Testimonial::latest()->get();
        return view('pages.stories', compact('stories'));
    }
}