<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;

class FrontendNewsController
{
    public function index()
    {
        $news = Post::whereNotNull('published_at')->orderBy('published_at', 'desc')->paginate(9);
        return view('pages.news', compact('news'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.news.show', compact('post'));
    }
}
