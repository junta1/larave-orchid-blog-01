<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\Platform\Core\Models\Post;

class AboutController extends Controller
{
    public function index()
    {
        $posts = Post::type('about')
            ->status('publish')
            ->with('attachment')
            ->orderBy('publish_at', 'Desc')
            ->simplePaginate(5);

        $teams = Post::type('aboutteam')
            ->status('publish')
            ->with('attachment')
            ->orderBy('publish_at', 'Desc')
            ->simplePaginate(5);

        return view('about.index', [
            'posts' => $posts,
            'teams' => $teams,
        ]);
    }
}
