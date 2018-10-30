<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TextEditor;

class TextEditorController extends Controller
{

    public function create(Request $request)
    {
        $text = New TextEditor;
        $text->text = $request-> editor;
        $text->save();
        return redirect('/adminCkeditor');
    }
}
