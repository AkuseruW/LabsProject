<?php

namespace App\Http\Controllers;

use App\Image;
use App\Article;
use App\Tag;
use App\User;
use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function validation(Request $request, $id){
        $articles = Article::find($id);

        $articles->validation = 1;
        $articles->save();
        return redirect()->back();
    }

    private function createTags(Request $request){
        if ($request->newTags == null) {
            $articles->tags()->attach($request -> tags);
        }
        else {
            $tags = new Tag;
            $tags->name = $request->newTags;
            $tags->slug = str_slug($request->newTags);
            $tags->save();

            $articles->tags()->attach($tags->id);
        }
    }

    private function createCategorie(Request $request){
        if ($request->newcategories == null) {
            $articles->categories()->attach($request -> categories);
        }
        else {
            $categorie = new Categorie;
            $categorie->name = $request->newcategories;
            $categorie->slug = str_slug($request->newcategories);
            $categorie->save();

            $articles->categories()->attach($categorie->id);
        }
    }

    private function addImage(Request $request){
        if ($request->imageArticle) {
            $image = New Image;
            $image->url = $request->imageArticle;
            $image->save();
        }
        $articles->image_article = $image->id;

        $articles -> save();
    }

    public function create(Request $request)
    {
        $articles = new Article;
        $users = User::all();
        $articles -> name = $request -> titreArticle;
        $articles -> content = $request -> descriptionArticle;
        $articles -> limitecontent = str_limit($request->descriptionArticle,250);

        //IMAGE
        if ($request->imageArticle) {
            $image = new Image;
            $image->url = $request->imageArticle;
            $image->save();
        }
        $articles->image_article = $image->id;

        $articles -> save();
        // $this->addImage();
        if ($request->newTags == null) {
            $articles->tags()->attach($request -> tags);
        }
        else {
            $tags = new Tag;
            $tags->name = $request->newTags;
            $tags->slug = str_slug($request->newTags);
            $tags->save();

            $articles->tags()->attach($tags->id);
        }

        //TAGS
        // $this->createTags();

        //CATEGORIES
        // $this->createCategorie();
        if ($request->newcategories == null) {
            $articles->categories()->attach($request -> categories);
        }
        else {
            $categorie = new Categorie;
            $categorie->name = $request->newcategories;
            $categorie->slug = str_slug($request->newcategories);
            $categorie->save();

            $articles->categories()->attach($categorie->id);
        }


        $articles->user_id = Auth::id();
        $articles->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $tags = Tag::all();
        $article = Article::find($id);
        $categories = Categorie::all();

        return view('blogPageTask/editArticle',compact('article','categories','tags'));
    }



    public function update(Request $request, $id)
    {
        // dd($request->tags);
        $articles = Article::find($id);
        $users = User::all();
        $articles -> name = $request -> titreArticle;
        $articles -> content = $request -> descriptionArticle;
        $articles -> limitecontent = str_limit($request->descriptionArticle,250);

        if ($request->imageArticle) {
            $image = New Image;
            $image->url = $request->imageArticle;
            $image->save();
        }
        $articles->image_article = $image->id;

        $articles -> save();

        //TAGS

        if ($request->newTags == null) {
            $articles->tags()->sync($request->tags);
        }
        else {
            $tags = new Tag;
            $tags->name = $request->newTags;
            $tags->slug = str_slug($request->newTags);
            $tags->save();

            $articles->tags()->attach($tags->id);
        }

        //CATEGORIES

        if ($request->newcategories == null) {
            $articles->categories()->attach($request -> categories);
        }
        else {
            $categorie = new Categorie;
            $categorie->name = $request->newcategories;
            $categorie->slug = str_slug($request->newcategories);
            $categorie->save();

            $articles->categories()->attach($categorie->id);
        }

        $articles->user_id = Auth::id();
        $articles->save();

        return redirect()->back();
    }

    public function destroy(User $users, $id)
    {
        $articles=Article::find($id);
        $articles->delete();

        return redirect()->back()->with('success','User delete !');
    }


}
