<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Position;

class UserController extends Controller
{
    public function index()
    {
        dd(User::find(1)->roles);
        // $users = User::with('roles')->get();
        $roles = Role::all();
        $positions = Position::all();
        $users = User::all();
        return view('editUsers/user',compact('users','positions','roles'));
    }
}
