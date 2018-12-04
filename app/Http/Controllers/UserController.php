<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Position;
use Validator;
use ImageIntervention;
use Storage;
use App\Image;
use App\Http\Requests\UserValidation;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $this->authorize('admin');
        $roles = Role::all();
        $positions = Position::all();
        $users = User::all();
        return view('editUsers/user', compact('users', 'positions', 'roles'));
    }

    public function indexMembre()
    {
        $roles = Role::all();
        $positions = Position::all();
        $users = User::all();
        return view('editUsers/membre', compact('users', 'positions', 'roles'));
    }

    public function create(UserValidation $request)
    {
        $this->authorize('admin');

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        if ($request->password) {
            $users->password = Hash::make($request->password);
        }
        $users->roles_id = $request->role;

        if ($request->newPos == null && $request->position != 1) {
            $users->positions_id = $request->position;
        } elseif ($request->newPos == null) {
            $users->positions_id = null;
        } else {
            $position = new Position;
            $position->name = $request->newPos;

            $position->save();

            $users->positions_id = $position->id;
        }


        // if ($request->image == true) {
        $image = $request->image;

        $filename = time() . $image->hashName();

            //resize
        $redimension = ImageIntervention::make($image)->resize(360, 448)->save();
        Storage::put('public/img/redimensionner/' . $filename, $redimension);
        $imageUsers = ImageIntervention::make($image)->resize(90, 90)->save();
        Storage::put('public/img/imageUsers/' . $filename, $imageUsers);

            //envoi DB
        $table = new Image;
        $table->url = $filename;

        $table->save();
        // }

        $users->image_user = $table->id;

        $users->save();
        return redirect()->back()->with('success', 'User create !');
    }

    public function edit(User $users, $id)
    {
        $this->authorize('admin');
        $users = User::find($id);
        $roles = Role::all();
        $positions = Position::all();
        return view('editUsers/editUser', compact('users', 'roles', 'positions'));
    }

    public function update(UserValidation $request, $id)
    {
        $users = User::find($id);
        $roles = Role::get();
        $positions = Position::get();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);;
        $users->roles_id = $request->role;

        if ($request->newPos == null && $request->position != 1) {
            $users->positions_id = $request->position;
        } elseif ($request->newPos == null) {
            $users->positions_id = null;
        } else {
            $position = new Position;
            $position->name = $request->newPos;

            $position->save();

            $users->positions_id = $position->id;
        }

        if ($request->image == true) {
            $image = $request->image;

            $filename = time() . $image->hashName();

            //resize
            $redimension = ImageIntervention::make($image)->resize(360, 448)->save();
            Storage::put('public/img/redimensionner/' . $filename, $redimension);
            $imageUsers = ImageIntervention::make($image)->resize(90, 90)->save();
            Storage::put('public/img/imageUsers/' . $filename, $imageUsers);

            //envoi DB
            $table = new Image;
            $table->url = $filename;

            $table->save();

            $users->image_user = $table->id;
        }

        $users->save();
        return redirect('/user')->with('success', 'User update !');
    }

    public function destroy(User $users, $id)
    {
        $this->authorize('admin');
        $users = User::find($id);
        $users->delete();

        return redirect()->back()->with('success', 'User delete !');
    }


}
