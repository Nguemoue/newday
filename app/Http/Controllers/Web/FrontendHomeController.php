<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ImpactStat;
use App\Models\Partner;
use App\Models\Program;
use App\Models\Testimonial;

class FrontendHomeController extends Controller
{
    public function __invoke()
    {
        $programs = Program::latest()->take(3)->get();
        $impactStats = ImpactStat::orderBy('sort_order')->take(4)->get();
        $testimonials = Testimonial::where('is_featured', true)->latest()->take(3)->get();
        $partners = Partner::where('is_active', true)->latest()->take(4)->get();

        return view('pages.home', compact('programs', 'impactStats', 'testimonials', 'partners'));
    }
}
