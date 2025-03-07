<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/sosafe', function () {
    return view('sosafe');
})->name('sosafe');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/feed-for-life', function () {
    return view('feed-for-life');
})->name('feed-for-life');

Route::get('/sostainer', function () {
    return view('sostainer');
})->name('sostainer');
