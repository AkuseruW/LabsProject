<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Article;
use App\Tag;
use App\Categorie;
use App\ImageCommentaire;

class BlogPageController extends Controller
{
    public function indexArticles()
    {
        $tags = Tag::orderBy('name')->where('validation', '=', '1')->get();
        $categories = Categorie::orderBy('name')->where('validation', '=', '1')->get();
        $articles = Article::all();
        return view('blogPageTask/articlesCreate', compact('tags', 'articles', 'categories'));
    }

    public function indexArticlesBlog()
    {
        $articles = Article::orderBy('created_at', 'desc')->where('validation', '=', '1')->paginate(3);
        $imgCommentaire = ImageCommentaire::all()->random(1);
        $tags = Tag::orderBy('name')->where('validation', '=', '1')->get();
        $categories = Categorie::orderBy('name')->where('validation', '=', '1')->get();
        return view('blog', compact('articles', 'categories', 'tags', 'imgCommentaire'));
    }

    public function indexArticlesView($id)
    {
        $article = Article::find($id);

        $tags = Tag::orderBy('name')->where('validation', '=', '1')->get();
        $categories = Categorie::orderBy('name')->where('validation', '=', '1')->get();
        $imgCommentaire = ImageCommentaire::all()->random(1);
        return view('blog-post', compact('article', 'categories', 'tags', 'imgCommentaire'));
    }

    public function searchArticle()
    {
        // $articles = Article::all();
        $tags = Tag::orderBy('name')->where('validation', '=', '1')->get();
        $categories = Categorie::orderBy('name')->where('validation', '=', '1')->get();
        $search = Input::get('search');
        $articleSearch = Article::where('name', 'LIKE', '%' . $search . '%')->orWhere('content', 'LIKE', '%' . $search . '%')->with('tags')->paginate(3);

        return view('blogSearch', compact('articleSearch', 'tags', 'categories'))->withDetails($articleSearch)->withQuery($search);
    }

    public function searchArticleTag($id)
    {
        $tags = Tag::orderBy('name')->where('validation', '=', '1')->get();
        $categories = Categorie::orderBy('name')->where('validation', '=', '1')->get();
        $rshTag = Tag::find($id);
        $pagination = $rshTag->articles()->paginate(3);

        return view('blogSearchTag', compact('tags', 'pagination', 'categories'));
    }

    public function searchArticleCategorie($id)
    {
        $tags = Tag::orderBy('name')->where('validation', '=', '1')->get();
        $categories = Categorie::orderBy('name')->where('validation', '=', '1')->get();
        $rshArticles = Categorie::find($id);
        $pagination = $rshArticles->articles()->paginate(3);

        return view('blogSearchCategorie', compact('tags', 'pagination', 'categories'));
    }

}
