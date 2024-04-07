<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Post;


class PostsController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "blog",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $blog) {
        return view('post', [
            'title' => 'Single post',
            'post' => $blog
        ]);
    }
}
