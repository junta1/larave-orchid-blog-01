<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\Platform\Core\Models\Post;

class MainController extends Controller
{
    public function index()
    {
        $slides = Post::type('mainslide')
            ->status('publish')
            ->with('attachment')
            ->orderBy('publish_at', 'Desc')
            ->simplePaginate(5);

        $posts = Post::type('blogpost')
            ->status('publish')
            ->with('attachment')
            ->orderBy('publish_at', 'Desc')
            ->simplePaginate(5);

        return view('main', [
            'slides' => $slides,
            'posts' => $posts,
        ]);
    }
}
