<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-detail', function () {
    return view('blog_detail');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/feature', function () {
    return view('feature');
});
Route::get('/pricing-plan', function () {
    return view('price');
});
Route::get('/team-members', function () {
    return view('team');
});