<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
//        $articles = Article::with('state', 'tags')
//            ->orderBy('created_at', 'desc')
//            //limit(6)
//            ->take(6)
//            ->get();
        $articles = Article::lastLimit(7);
        return view('app.home', compact('articles'));
    }
}
