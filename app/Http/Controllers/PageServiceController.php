<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\VideoHomePage;
use App\TextEditor;
use App\Project;

class PageServiceController extends Controller
{
    public function index()
    {
        $serviceNoRandom = Service::all();
        $services = Service::all()->random(3);
        $projects = Project::orderBy('id', 'DESC')->take(6)->get()->reverse();
        return view ('services',compact('services','serviceNoRandom','projects'));
    }
}
