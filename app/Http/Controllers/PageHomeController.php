<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\VideoHomePage;
use App\TextEditor;
use App\User;
use App\Icone;
use App\Testimonial;

class PageHomeController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        $serviceNoRandom = Service::all();
        $services = Service::all()->random(3);
        $icones = Icone::all();
        $video = VideoHomePage::all();
        $text = TextEditor::all();
        $admin = User::find([1]);
        $users = User::all()->where('id', '>', '1')->random(1);
        $users2 = User::all()->where('id', '>', '1', '&&', 'id', '!=', 'users' )->random(1);
        return view ('home',compact('services','serviceNoRandom','video','text','admin','users','users2','icones','testimonials'));
    }
}
