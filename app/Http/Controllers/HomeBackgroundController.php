<?php

namespace App\Http\Controllers;

use App\HomeBackground;
use Illuminate\Http\Request;
use ImageIntervention;
use Storage;

class HomeBackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {

        $image = $request->background;

        $filename = time().$image->hashName();

        //resize
        $redimension = ImageIntervention::make($image)->resize(1838, 548, function ($constraint) {
            $constraint->aspectRatio();
        })->save();
        Storage::put('public/img/redimensionner/'.$filename,$redimension);

        //envoi DB
        $table = new HomeBackground;
        $table->image = $filename;

        $table->save();

        return redirect()->back();
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
     * @param  \App\HomeBackground  $homeBackground
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBackground $homeBackground)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomeBackground  $homeBackground
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeBackground $homeBackground)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomeBackground  $homeBackground
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $table=HomeBackground::find($id);

        $image = $request->background;

        $filename = time().$image->hashName();
        // Storage::delete(['file', 'otherFile']);
        //resize
        $redimension = ImageIntervention::make($image)->resize(1838, 548, function ($constraint) {
            $constraint->aspectRatio();
        })->save();
        Storage::put('public/img/redimensionner/'.$filename,$redimension);

        //envoi DB
        $table->image = $filename;
        $table->save();

        return redirect()->back();
    }


    public function destroy($id)
    {
        $image=HomeBackground::find($id);
        $image->delete();

        return redirect()->back()->with('success','User delete !');
    }
}
