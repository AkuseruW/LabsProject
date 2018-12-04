<?php

namespace App\Http\Controllers;

use App\Project;
use App\Icone;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProjectValidation;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        $projects = Project::all();
        $icones = Icone::all();
        return view('servicePage/project', compact('projects', 'icones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProjectValidation $request)
    {
        $this->authorize('admin');
        $projects = new Project;
        $projects->titre = $request->nameProject;
        $projects->description = $request->descriptionProject;
        $projects->icones_Project = $request->iconeProject;

        $image = new Image;
        $path = $request->file('imageProject')->store('public');
        $image->url = $path;
        $image->save();


        $projects->image_id = $image->id;
        $projects->save();
        return redirect()->back()->with('success', 'Nouveau projects creer');
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
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectValidation $request, $id)
    {
        $this->authorize('admin');
        $projects = Project::find($id);
        $projects->titre = $request->nameProject;
        $projects->description = $request->descriptionProject;
        $projects->icones_Project = $request->iconeProject;

        if ($request->imageProject) {
            $image = new Image;
            $path = $request->file('imageProject')->store('public');
            $image->url = $path;
            $image->save();
            $projects->image_id = $image->id;
        }

        $projects->save();
        return redirect()->back()->with('success', 'Nouveau projects creer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $project = Project::find($id);
        $project->delete();

        return redirect()->back();
    }
}
