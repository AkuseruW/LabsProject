<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;

class BlogPageController extends Controller
{
    public function indexArticles()
    {
        $tags = Tag::all();
        $articles = Article::all();
        return view('blogPageTask/articlesCreate',compact('tags','articles'));
    }


}
