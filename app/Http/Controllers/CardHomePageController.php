<?php

namespace App\Http\Controllers;

use App\CardHomePage;
use Validator;
use Illuminate\Http\Request;

class CardHomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'titreHomeCards' => 'required',
            'descriptionHomeCards' => 'required',
            'iconeHomeCards'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('/CreateCardsHome')
                        ->withErrors($validator)
                        ->withInput();
        }

        $cards = new CardHomePage;
        $cards->titre = $request->titreHomeCards;
        $cards->description = $request->descriptionHomeCards;
        $cards->icone = $request->iconeHomeCards;
        $cards->save();
        return redirect()->back()->with('success','Carte Creer');
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
     * @param  \App\CardHomePage  $cardHomePage
     * @return \Illuminate\Http\Response
     */
    public function show(CardHomePage $cardHomePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CardHomePage  $cardHomePage
     * @return \Illuminate\Http\Response
     */
    public function edit(CardHomePage $cardHomePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CardHomePage  $cardHomePage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardHomePage $cardHomePage)
    {
        //
    }

    
    public function destroy(CardHomePage $cardHomePage)
    {
        //
    }
}
