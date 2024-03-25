<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {
    return view('posts', [
        "title" => "blog"
    ]);
});
