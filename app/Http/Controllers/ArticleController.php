<?php

namespace App\Http\Controllers;

use App\Image;
use App\Article;
use App\Tag;
use App\User;
use App\Categorie;
use App\Http\Requests\ArticleValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function validation(Request $request, $id)
    {
        $articles = Article::find($id);

        $articles->validation = 1;
        $articles->save();
        return redirect()->back();
    }
    public function validationTag(Request $request, $id)
    {
        $tag = Tag::find($id);

        $tag->validation = 1;
        $tag->save();
        return redirect()->back();
    }
    public function validationCategorie(Request $request, $id)
    {
        $categorie = Categorie::find($id);

        $categorie->validation = 1;
        $categorie->save();
        return redirect()->back();
    }

    private function createTags(Request $request)
    {
        if ($request->newTags == null) {
            $articles->tags()->attach($request->tags);
        } else {
            $tags = new Tag;
            $tags->name = $request->newTags;
            $tags->slug = str_slug($request->newTags);
            $tags->save();

            $articles->tags()->attach($tags->id);
        }
    }

    private function createCategorie(Request $request)
    {
        if ($request->newcategories == null) {
            $articles->categories()->attach($request->categories);
        } else {
            $categorie = new Categorie;
            $categorie->name = $request->newcategories;
            $categorie->slug = str_slug($request->newcategories);
            $categorie->save();

            $articles->categories()->attach($categorie->id);
        }
    }

    private function addImage(Request $request)
    {
        if ($request->imageArticle) {
            $image = new Image;
            $image->url = $request->imageArticle;
            $image->save();
        }
        $articles->image_article = $image->id;

        $articles->save();
    }

    public function create(ArticleValidation $request)
    {
        $articles = new Article;
        $users = User::all();
        $articles->name = $request->titreArticle;
        $articles->content = $request->descriptionArticle;
        $articles->limitecontent = str_limit($request->descriptionArticle, 250);

        //IMAGE
        if ($request->imageArticle) {
            $image = new Image;
            $image->url = $request->imageArticle;
            $image->save();
            $articles->image_article = $image->id;
        }

        $articles->save();
        // $this->addImage();
        if ($request->newTags == null) {
            $articles->tags()->attach($request->tags);
        } else {
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
            $articles->categories()->attach($request->categories);
        } else {
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

    public function edit(Article $article, $id)
    {
        $article = Article::find($id);
        $this->authorize('update-post', $article);
        $tags = Tag::orderBy('name')->where('validation', '=', '1')->get();
        $categories = Categorie::orderBy('name')->where('validation', '=', '1')->get();

        return view('blogPageTask/editArticle', compact('article', 'tags', 'categories'));
    }



    public function update(ArticleValidation $request, $id)
    {
        // dd($request->tags);
        $articles = Article::find($id);
        $users = User::all();
        $categories = Categorie::all();
        $articles->name = $request->titreArticle;
        $articles->content = $request->descriptionArticle;
        $articles->limitecontent = str_limit($request->descriptionArticle, 250);

        if ($request->imageArticle) {
            $image = new Image;
            $image->url = $request->imageArticle;
            $image->save();
            $articles->image_article = $image->id;
        }

        $articles->save();

        //TAGS

        if ($request->newTags == null) {
            $articles->tags()->sync($request->tags);
        } else {
            $tags = new Tag;
            $tags->name = $request->newTags;
            $tags->slug = str_slug($request->newTags);
            $tags->save();

            $articles->tags()->attach($tags->id);
        }

        //CATEGORIES

        if ($request->newcategories == null) {
            $articles->categories()->attach($request->categories);
        } else {
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

    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->delete();

        return redirect()->back()->with('success', 'Article delete !');
    }

    public function destroyTag($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return redirect()->back()->with('success', 'Tag delete !');
    }

    public function destroyCategorie($id)
    {
        $categorie = Categorie::find($id);
        $categorie->delete();

        return redirect('/mesArticles')->with('success', 'Categorie delete !');
    }


}
