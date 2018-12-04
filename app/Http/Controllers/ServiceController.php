<?php

namespace App\Http\Controllers;

use App\Service;
use App\Icone;
use Validator;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceValidation;

class ServiceController extends Controller
{
    public function index()
    {
        // $projects = Project::all();
        // $icones = Icone::all();
        // return view('servicePage/project',compact('projects','icones'));
        // $serviceNoRandom = Service::all();
        // $services = Service::all()->random(3);
        // $projects = Project::orderBy('id', 'DESC')->take(6)->get()->reverse();
        // $projectsTrois = Project::orderBy('id', 'DESC')->take(3)->get();
        // return view ('homePageTask/service',compact('services','serviceNoRandom','projects','projectsTrois'));
    }

    public function create(ServiceValidation $request)
    {
        $this->authorize('admin');

        $service = new Service;
        $service->titre = $request->titreService;
        $service->description = $request->descriptionService;
        $service->icones_id = $request->iconeService;
        $service->save();
        return redirect()->back()->with('success', 'Nouveau Service creer');
    }

    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->titre = $request->titreService;
        $service->description = $request->descriptionService;
        $service->icones_id = $request->iconeService;

        $service->save();
        return redirect()->back()->with('success', 'Update Service creer');
    }

    public function destroy($id)
    {
        $this->authorize('admin');
        $service = Service::find($id);
        $service->delete();

        return redirect()->back()->with('success', 'Delete Service creer');
    }
}
