<?php

namespace App\Http\Controllers;

use App\Commentaire;
use Illuminate\Http\Request;
use App\Article;

class CommentaireController extends Controller
{
    public function create(Request $request, $id)
    {
        $article = Article::find($id);
        $commentaire = new Commentaire;
        $commentaire->name = $request->name;
        $commentaire->email = $request->email;
        $commentaire->subject = $request->subject;
        $commentaire->message = $request->message;

        $commentaire->save();
        $commentaire->articles()->attach($article->id);
        return redirect()->back();
    }
}
