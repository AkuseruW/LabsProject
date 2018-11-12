<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Position;
use Validator;

class UserController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $positions = Position::all();
        $users = User::all();
        return view('editUsers/user',compact('users','positions','roles'));
    }

    public function indexMembre()
    {
        $roles = Role::all();
        $positions = Position::all();
        $users = User::all();
        return view('editUsers/membre',compact('users','positions','roles'));
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password'=>'required',
            'role'=>'required',
            // 'position'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->roles_id = $request->role;

        if ($request->newPos == null) {
            $users->positions_id = $request->position;
        }
        else {
            $position = new Position;
            $position->name = $request->newPos;

            $position->save();

            $users->positions_id = $position->id;
        }

        $users->save();
        return redirect()->back()->with('success','User create !');
    }

    public function edit(User $users, $id)
    {
        $users=User::find($id);
        $roles=Role::all();
        $positions=Position::all();
        return view('editUsers/editUser', compact('users','roles','positions'));
    }

    public function update(Request $request, $id)
    {
        $users=User::find($id);
        $roles = Role::get();
        $positions = Position::get();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->roles_id = $request->role;

        if ($request->newPos == null) {
            $users->positions_id = $request->position;
        }
        else {
            $position = new Position;
            $position->name = $request->newPos;

            $position->save();

            $users->positions_id = $position->id;
        }

        $users->save();
        return redirect('/user')->with('success','User update !');
    }

    public function destroy(User $users, $id)
    {
        $users=User::find($id);
        $users->delete();
        return redirect()->back()->with('success','User delete !');
    }


}