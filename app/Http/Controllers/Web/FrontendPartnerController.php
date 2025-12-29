<?php

namespace App\Http\Controllers\Web;

use App\Models\Partner;

class FrontendPartnerController
{
    public function __invoke()
    {
        $partners = Partner::where('is_active', true)->get();
        return view('pages.partners', compact('partners'));
    }
}
