<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orchid\Platform\Core\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::type('blogpost')
            ->status('publish')
            ->with('attachment')
            ->orderBy('publish_at', 'Desc')
            ->simplePaginate(5);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }
}
