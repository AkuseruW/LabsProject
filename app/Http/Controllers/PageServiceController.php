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
        $serviceNoRandom = Service::orderBy('id')->paginate(9);
        $services = Service::all()->random(3);
        $projects = Project::orderBy('id', 'DESC')->take(6)->get()->reverse();
        $projectsTrois = Project::orderBy('id', 'DESC')->take(3)->get();
        return view ('services',compact('services','serviceNoRandom','projects','projectsTrois'));
    }
}
