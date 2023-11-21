<?php

namespace FxApp\Posts\Http\Controllers;


use FxApp\Posts\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Post::create(['title' => 'test']);

        $posts = Post::all();
        return view('posts::index', [
            'posts' => $posts
        ]);
    }
}
