<?php

namespace App\Http\Controllers;

use App\Service;
use App\Icone;
use Validator;
use App\Project;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titreService' => 'required',
            'descriptionService' => 'required',
            'iconeService'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $service = new Service;
        $service->titre = $request->titreService;
        $service->description = $request->descriptionService;
        $service->icones_id = $request->iconeService;
        $service->save();
        return redirect()->back()->with('success','Nouveau Service creer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
