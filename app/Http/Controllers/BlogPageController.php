<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
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
        $articles = Article::orderBy('created_at','desc')->where('validation','=','1')->paginate(3);
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('blog', compact('articles','categories','tags'));
    }

    public function indexArticlesView($id)
    {
        $article = Article::find($id);
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('blog-post',compact('article','categories','tags'));
    }

    public function searchArticle(){
        $categories = Categorie::All();
        $tags = Tag::all();
        $articles = Article::all();
        $search = Input::get ( 'search' );
        $articleSearch = Article::where('name','LIKE','%'.$search.'%')->orWhere('content','LIKE','%'.$search.'%')->with('tags')->paginate(3);

        if(count($articleSearch) > 0)

        return view('blogSearch',compact('articles','articleSearch','tags','categories'))->withDetails($articleSearch)->withQuery($search);
        else return view ('blogSearch')->withMessage('No Details found. Try to search again !');
    }

    public function searchArticleTag($id){
        $categories = Categorie::All();
        $tags = Tag::all();
        $rshTag = Tag::find($id);
        $pagination = $rshTag->articles()->paginate(3);

        return view ('blogSearchTag',compact('tags','pagination','categories'));
    }

    public function searchArticleCategorie($id){
        $categories = Categorie::All();
        $tags = Tag::all();
        $rshArticles = Categorie::find($id);
        $pagination = $rshArticles->articles()->paginate(3);

        return view ('blogSearchTag',compact('tags','pagination','categories'));
    }

}
