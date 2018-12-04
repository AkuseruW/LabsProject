<?php

namespace App\Http\Controllers;

use App\Testimonial;
use ImageIntervention;
use Storage;
use Illuminate\Http\Request;
use App\Http\Requests\TestimonialValidation;


class TestimonialController extends Controller
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
    public function create(TestimonialValidation $request)
    {
        $testimonial = new Testimonial;
        $testimonial->avis = $request->avis;
        $testimonial->name = $request->name;
        $testimonial->function = $request->fonction;

        $image = $request->image;

        $filename = time() . $image->hashName();
        //resize
        $redimension = ImageIntervention::make($image)->resize(60, 60)->save();
        Storage::put('public/img/testimonialImage/' . $filename, $redimension);
        //envoi DB
        $testimonial->image = $filename;

        $testimonial->save();
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
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialValidation $request, $id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->avis = $request->avis;
        $testimonial->name = $request->name;
        $testimonial->function = $request->fonction;

        if ($request->image) {
            $image = $request->image;

            $filename = time() . $image->hashName();
            //resize
            $redimension = ImageIntervention::make($image)->resize(60, 60)->save();
            Storage::put('public/img/testimonialImage/' . $filename, $redimension);
            //envoi DB
            $testimonial->image = $filename;
        }

        $testimonial->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();

        return redirect('/testimonial')->with('success', 'Testimonial delete !');
    }
}
