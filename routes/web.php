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

Route::get('/breastmilk-smart', function () {
    return view('breastmilk-smart');
})->name('breastmilk-smart');

Route::get('/impact', function () {
    return view('impact');
})->name('impact');

Route::get('/research', function(){
    return view('research');
})->name('research');

Route::get('/breast-is-best', function(){
    return view('breast-is-best');
})->name('breast-is-best');

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/safe-user-of-dbm', function(){
    return view('safe-user-of-dbm');
})->name('safe-user-of-dbm');

Route::get('/why-the-cost', function(){
    return view('why-the-cost');
})->name('why-the-cost');

Route::get('/donate', function(){
    return view('donate');
})->name('donate');
