<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Municipio;
use Illuminate\Http\Request;

class RegistroPacienteController extends Controller
{
    //
    public function crear(){

        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        Return view ('paciente.formulario')->with('departamentos',$departamentos)->with('municipios',$municipios);
    }

}
