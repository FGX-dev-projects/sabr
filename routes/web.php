<?php

use App\Http\Controllers\DonateController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::get('/news', action: [NewsController::class, 'newsPage'])->name('news');

Route::get('/sosafe', function () {
    return view('sosafe');
})->name('sosafe');

Route::get('/news-test', function () {
    $news = DB::table('posts')->where('is_active', 1)->get();
    return view('news', compact('news'));
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/contact-us', function() {
    return view('contact-us');
})->name('contact-us');

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


Route::get('/safe-use-of-dbm', function(){
    return view('safe-user-of-dbm');
})->name('safe-use-of-dbm');

Route::get('/toolkit-access-value', function(){
    return view('toolkit-access-value');
})->name('toolkit-access-value');

Route::get('/why-the-cost', function(){
    return view('why-the-cost');
})->name('why-the-cost');

Route::get('/donate', function(Request $request){
    $memberGroupID = $request->get('memberGroupID', 2); // Default to 2 for donors
    return view('donate', compact('memberGroupID'));
})->name('donate');

Route::get('board-of-directors', function(){
    return view('board-of-directors');
})->name('board-of-directors');


Route::get('/stats', function() {
    return view('stats');
})->name('stats');

// Route::get('/register',function(){
//     return view('register');
// })->name('register');

Route::get('/volunteer', function(Request $request){
    $memberGroupID = $request->get('memberGroupID', 4); // Default to 4 for volunteers
    return view('volunteer', compact('memberGroupID'));
})->name('volunteer');

Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/get-involved', function() {
    return view('get-involved');
})->name('get-involved');

Route::get('/financials', function(){
    return view('financials');
})->name('financials');

Route::get('/milk-banks', function(){
    return view('milk-banks');
})->name('milk-banks');

// Route::get('/test-mail', function() {
//     Mail::raw('This is a test email', function ($message) {
//         $message->to('lesedi@fgx.co.za')->subject('Test Email');
//     });

//     return 'Mail sent 2 day';
// });

Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register-submit', [RegisterController::class, 'submit'])->name('register.submit');

Route::post('/donate-submit', [DonateController::class, 'submit'])->name('donate.submit');
Route::post('/volunteer-submit', [VolunteerController::class, 'submit'])->name('volunteer.submit');
// Route::post('/register-submit', [RegisterController::class, 'submit'])->name('register.submit');

Route::get('/', [NewsController::class, 'index'])->name('home');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.article');
