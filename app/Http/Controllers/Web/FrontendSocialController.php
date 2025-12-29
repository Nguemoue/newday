<?php

namespace App\Http\Controllers\Web;

use App\Models\SocialLink;

class FrontendSocialController
{
    public function __invoke()
    {
        $socialLinks = SocialLink::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('pages.social', compact('socialLinks'));
    }
}
