<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('posts')
            ->where('is_active', 1)
            ->orderBy('article_date', 'desc')->get();

        return view('home', compact('news'));
    }

    public function newsPage()
    {
        $news = DB::table('posts')
            ->where('is_active', 1)
            ->orderBy('article_date', 'desc')
            ->get();

        return view('news', compact('news'));
    }

    public function show($slug)
    {
        $article = DB::table('posts')
            ->where('slug', $slug)
            ->where('is_active', 1)
            ->first();

        if (!$article) {
            abort(404);
        }

        return view('news.article', compact('article'));
    }
}