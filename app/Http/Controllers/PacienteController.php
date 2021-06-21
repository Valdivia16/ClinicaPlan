<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Registro_paciente;
use App\Registro_paise;
use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function create(Request $request){
        $reistroPacientes = new Registro_paciente();
        $reistro_paises=Registro_paise::all();
        $departamentos=Departamento::all();
        $municipios=Municipio::all();
        $reistroPacientes->nombre=$request->input("nombre");
        $reistroPacientes->id_depto= $request->input("id_depto");
        $reistroPacientes->id_municipio= $request->input("id_municipio");
        $reistroPacientes->save();
        return view('Paciente.paciente',compact("reistro_paises","departamentos","municipios"));
    }
    public function departamentos(Request $request){
        if(isset($request->texto)){
            $departamentos = Departamento::whereid_depto($request->texto)->get();
            return response()->json(
                [
                    'lista' => $departamentos,
                    'success' => true
                ]
            );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
            );

        }

    }
}
