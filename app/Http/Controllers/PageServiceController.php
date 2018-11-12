<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\VideoHomePage;
use App\TextEditor;

class PageServiceController extends Controller
{
    public function index()
    {
        $serviceNoRandom = Service::all();
        $services = Service::all()->random(3);
        return view ('services',compact('services','serviceNoRandom'));
    }
}
