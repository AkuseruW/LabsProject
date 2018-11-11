<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextEditor;
use App\CardHomePage;

class TextEditorController extends Controller
{

    // public function create(Request $request)
    // {
    //     $text = New TextEditor;
    //     $text->text = $request-> editor;
    //     $text->save();
    //     return redirect('/homeEdit');
    // }

    public function update(Request $request)
    {
        $request->validate([
            'editor' => 'required|',
        ]);

        $text = TextEditor::find(1);
        $text->text = $request->editor;
        $text->save();
        return redirect()->back();
    }
}
