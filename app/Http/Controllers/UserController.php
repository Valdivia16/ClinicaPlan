<?php

namespace App\Http\Controllers;

use App\Registro_paciente;
use App\Role;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function create(){
        $roles= Role::all();
        $users= User::all();
        return view('auth.register')->with('users',$users)->with('roles',$roles);
    }
    public function index()
    {
        $users=User::all();
        $usuarios = DB::table('users as u')
            ->join('roles as t','u.rol','=','t.id')
            ->select('u.*','t.rol')
            ->paginate(10);
        return view('usuarios.index')->with('usuarios',$usuarios)->with('users',$users);
    }

}
