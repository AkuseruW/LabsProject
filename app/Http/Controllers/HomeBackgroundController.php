<?php

namespace App\Http\Controllers;

use App\HomeBackground;
use Illuminate\Http\Request;

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
        $path = $request->file('background')->store('public');
        $tasks = new HomeBackground;
        $tasks->image = $path;
        $tasks->save();
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
    public function update(Request $request, HomeBackground $homeBackground)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomeBackground  $homeBackground
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeBackground $homeBackground)
    {
        //
    }
}
