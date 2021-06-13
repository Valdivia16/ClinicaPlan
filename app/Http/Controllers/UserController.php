<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(){
        $roles= Role::all();
        $users= User::all();
        return view('auth.register')->with('users',$users)->with('roles',$roles);
    }
}
