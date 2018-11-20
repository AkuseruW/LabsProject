<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Categorie;

class BlogPageController extends Controller
{
    public function indexArticles()
    {
        $tags = Tag::all();
        $categories = Categorie::all();
        $articles = Article::all();
        return view('blogPageTask/articlesCreate',compact('tags','articles','categories'));
    }

    public function indexArticlesBlog()
    {
        $articles = Article::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('blog',compact('articles','categories','tags'));
    }

    public function indexArticlesView()
    {
        $articles = Article::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('blog-post',compact('articles','categories','tags'));
    }

}
