<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show(Post $post)
    {
        $post->views++;
        $post->save();

        return view('posts.show', compact('post'));
    }
}
