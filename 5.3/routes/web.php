<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::bind('category', function ($id) {
    return new App\Category($id);
});

Route::bind('post', function ($id) {
    return new App\Post($id);
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/category/{category}', function ($category) {
    return view('category', compact('category'));
})->name('category');

Route::get('/post/{post}', function ($post) {
    return view('post', compact('post'));
})->name('post');

Route::get('/bootstrap2', function () {
    return view('bootstrap2');
})->name('bootstrap2');

Route::get('/print_r', function () {
    return view('print_r');
})->name('print_r');
