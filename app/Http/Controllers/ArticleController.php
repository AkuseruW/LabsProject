<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(Request $request)
    {
        $articles = new Article;
        $articles -> name = $request -> titreArticle;
        $articles -> content = $request -> descriptionArticle;
        $articles -> save();

        $articles->tags()->attach($request -> tags);

        return redirect()->back();
    }
}
