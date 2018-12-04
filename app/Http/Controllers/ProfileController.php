<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use ImageIntervention;
use App\User;
use App\Role;
use App\Position;
use App\Image;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::find(\Auth::user()->id);

        return view('account.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('account.profileEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $roles = Role::get();
        $positions = Position::get();
        if ($request->newFirstName) {
            $users->name = $request->newFirstName;
        }
        if ($request->newEmail) {
            $users->email = $request->newEmail;
        }
        if ($request->newPassword) {
            $users->password = Hash::make($request->newPassword);
        }
        if ($request->newBiography) {
            $users->biography = $request->newBiography;
        }
        if ($request->newImage == true) {
            $image = $request->newImage;
            $filename = time() . $image->hashName();

            //resize
            $redimension = ImageIntervention::make($image)->resize(360, 448)->save();
            Storage::put('public/img/redimensionner/' . $filename, $redimension);

            //envoi DB
            $table = new Image;
            $table->url = $filename;

            $table->save();

            $users->image_user = $table->id;
        }

        $users->save();

        return redirect()->route('showProfile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
