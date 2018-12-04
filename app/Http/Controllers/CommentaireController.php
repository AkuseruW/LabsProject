<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;
use App\Article;
use \App\ImageCommentaire;

class CommentaireController extends Controller
{
    public function create(Request $request, $id)
    {
        $article = Article::find($id);
        $imgCommentaire = ImageCommentaire::all()->random();
        $commentaire = new Commentaire;
        $commentaire->name = $request->name;
        $commentaire->email = $request->email;
        $commentaire->subject = $request->subject;
        $commentaire->message = $request->message;
        $commentaire->img_id = $imgCommentaire->id;

        $commentaire->save();
        $commentaire->articles()->attach($article->id);
        return redirect()->back();
    }

    public function index($id)
    {
        $article = Article::find($id);
        $comArticle = $article->commentaires()->paginate(15);

        return view('blogPageTask/commentairesArticle', compact('comArticle'));
    }

    public function destroy($id)
    {
        $commentaire = Commentaire::find($id);
        $commentaire->delete();
        return redirect()->back();
    }
}
