<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Posts;

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',  [
        "title" => "about",
        "name" => "Haikal",
        "umur" => 20,
        "jurusan" => "sistem informasi"
    ]);
});

Route::get('/blog', [PostsController::class, 'index']);
Route::get( '/post/{blog:title}', [PostsController::class, 'show']);
