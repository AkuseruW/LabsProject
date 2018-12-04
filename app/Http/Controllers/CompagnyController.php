<?php

namespace App\Http\Controllers;

use App\Compagny;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CompagnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compagnie = Compagny::all();
        // dd($compagnie[0]);
        return View('administration.compagny', compact('compagnie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function show(Compagny $compagny)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compagnie = Compagny::find($id);

        return view('administration.editCompagny');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $compagnie = Compagny::find($id);

        $compagnie->description = $request->description;
        $compagnie->lieux = $request->lieux;
        $compagnie->numero = $request->numero;
        $compagnie->email = $request->email;

        $compagnie->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compagny $compagny)
    {
        //
    }
}
