<?php

namespace App\Http\Controllers\Web;

use App\Models\ImpactStat;

class FrontendImpactController
{
    public function __invoke()
    {
        $impactStats = ImpactStat::orderBy('sort_order')->get();
        return view('pages.impact', compact('impactStats'));
    }
}
