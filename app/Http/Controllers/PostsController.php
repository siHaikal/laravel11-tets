<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Posts;


class PostsController extends Controller
{
    public function index() {
        return view('posts', [
            "title" => "blog",
            "posts" => Posts::all()
        ]);
    }

    public function show($slug) {
        return view('post', [
            'title' =>Posts::find($slug)['slug'],
            'post' => Posts::find($slug)
        ]);
    }
}
