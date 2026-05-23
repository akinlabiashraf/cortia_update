<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/solutions', function () {
    return view('solutions');
});
Route::get('/projects', function () {
    return view('projects');
});
Route::get('/landcerta', function () {
    return view('landcerta');
});
Route::get('/coresure', function () {
    return view('coresure');
});
Route::get('/eduos', function () {
    return view('eduos');
});
Route::get('/aisolution', function () {
    return view('aisolution');
});
Route::get('/development', function () {
    return view('development');
});