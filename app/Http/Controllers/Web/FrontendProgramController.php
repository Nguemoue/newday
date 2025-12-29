<?php

namespace App\Http\Controllers\Web;

use App\Models\Program;

class FrontendProgramController
{
    public function index()
    {
        $programs = Program::all();
        return view('pages.programs.index', compact('programs'));
    }

    public function show($slug)
    {
        $program = Program::where('slug', $slug)->firstOrFail();
        return view('pages.programs.show', compact('program'));
    }
}
