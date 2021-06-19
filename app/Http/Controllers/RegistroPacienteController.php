<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroPacienteController extends Controller
{
    //

    public function index(){

        Return view ('paciente.listaPaciente');
}

    public function crear(){
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        Return view ('paciente.formulario')->with('departamentos',$departamentos)->with('municipios',$municipios);
    }


    public function seleccionar($idDepartamento){
           // $municipios = Municipio::findOrFair($id);
            $municipios = DB::table('municipios')
                ->join('departamentos as d','d.id','=','idDepartamento'  )
                ->select('municipio','idDepartamento', 'municipios.id')
                ->groupBy('municipio', 'idDepartamento')
                ->get();
            return view('home')->with('municipios',$municipios);
        }
}
