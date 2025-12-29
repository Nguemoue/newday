<?php

namespace App\Http\Controllers\Web;

use App\Models\TeamMember;

class FrontendTeamController
{

    public function __invoke()
    {
        $teamMembers = TeamMember::where('is_active', true)->orderBy('sort_order')->get();
        return view('pages.team', compact('teamMembers'));
    }
}
