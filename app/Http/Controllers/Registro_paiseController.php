<?php

namespace App\Http\Controllers;

use App\Registro_paciente;
use App\Registro_paise;
use Illuminate\Http\Request;

class Registro_paiseController extends Controller
{
    public function crear(){
        $paises = Registro_paciente::all();
        return view('home')->with('paises',$paises);
    }

    public function store(Request $request){
        $pais = new Registro_paise();
        $pais->pais=$request->input("pais");
        $pais ->save();
    }
}
