<?php

namespace App\Http\Controllers;

use App\Compagny;
use Illuminate\Http\Request;
use App\Service;
use App\VideoHomePage;
use App\TextEditor;
use App\User;
use App\Icone;
use App\Testimonial;
use App\HomeBackground;

class PageHomeController extends Controller
{
    public function index()
    {
        $compagnie = Compagny::all();
        $testimonials = Testimonial::all();
        $serviceNoRandom = Service::all();
        $services = Service::all()->random(3);
        $icones = Icone::all();
        $video = VideoHomePage::all();
        $text = TextEditor::all();
        $admin = User::find([1]);
        $users = User::whereNotNull('positions_id')->where('id', '>', 1)->get()->random(2);
        $imgBackground = HomeBackground::all();
        return view('home', compact('services', 'serviceNoRandom', 'video', 'text', 'admin', 'users', 'users2', 'icones', 'testimonials', 'imgBackground', 'compagnie'));
    }
}
