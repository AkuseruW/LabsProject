<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\VideoHomePage;
use App\TextEditor;

class PageHomeController extends Controller
{
    public function index()
    {
        $serviceNoRandom = Service::all();
        $services = Service::all()->random(3);
        $video = VideoHomePage::all();
        $text = TextEditor::all();
        return view ('home',compact('services','serviceNoRandom','video','text'));
    }
}
