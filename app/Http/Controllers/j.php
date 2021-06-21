<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Municipio;
use App\Registro_paise;
use App\RegistroPaciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroPacienteController extends Controller
{
    //

    public function index(){
        $pacientes = RegistroPaciente::all();
        Return view ('paciente.listaPaciente',compact("pacientes"));
}

    public function crear(){
        $paises = Registro_paise::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        Return view ('paciente.formulario')
            ->with('departamentos',$departamentos)
            ->with('paises',$paises)
            ->with('municipios',$municipios);
    }
    public function store(Request $request){
        $this->validate($request,[

            "nda"=>"required|max:20",
            "primerNombre"=>"required|max:80|min:3",
            "segundoNombre"=>"max:80|min:3",
            "primerApellido"=>"required|max:80|min:3",
            "segundoApellido"=>"max:80|min:3",
            "id_pais"=>"required",
            "idDepartamento"=>"required",
            "idMunicipio"=>"required",
            "direccion"=>"required",
            "nombrePadre"=>"required|max:250|min:5",
            "nombreMadre"=>"required|max:250|min:5",
            "fechaNacimiento"=>"required",
            "sexo"=>"required",
            "foto"=>"required",
            "telefono"=>"numeric|min:10000000|max:99999999"
        ],[

            "dni.max"=>"FDDF",
            "dni.min"=>"FFFD",
            "nda.required"=>"FDFDF",
            "primerNombre.required"=>"Ingresar el Pprimer nombre del paciente",
            "primerNombre.max"=>"FF",
            "primerNombre.min"=>"I",
            "segundoNombre.max"=>"DFFDFD",
            "segundoNombre.min"=>"FDFD",
            "primerApellido.required"=>"FDFD",
            "primerApellido.max"=>"FDFD",
            "primerApellido.min"=>"FDFDFD",
            "segundoApellido.max"=>"FFDFD",
            "segundoApellido.min"=>"FDDF",
            "id_pais.required"=>"FDFDFD",
            "idDepartamento.required"=>"FDFD",
            "iidMunicipio.required"=>"DFDF",
            "direccion.required"=>"FDDF",
            "nombrePadre.required"=>"FDFD",
            "nombrePadre.max"=>"FDDF",
            "nombrePadre.min"=>"FDDF",
            "nombreMadre.max"=>"FDF",
            "nombreMadre.min"=>"DFFD",
            "fechaNacimiento.required"=>"DFFD",
            "sexo.required"=>"DFFDDF",
            "foto.required"=>"DFDFDF",
            "telefono.required"=>"FDFD",
            "telefono.numeric"=>"FDF",
            "telefono.min"=>"DFFD",
            "telefono.max"=>"FDFD",
            "telefono.unique"=>"FDFD",
        ]);
        $registroPacientes=new RegistroPaciente();
        $registroPacientes->dni=$request->input("dni");
        $registroPacientes->nda=$request->input("nda");
        $registroPacientes->primerNombre=$request->input("primerNombre");
        $registroPacientes->segundoNombre=$request->input("segundoNombre");
        $registroPacientes->primerApellido=$request->input("primerApellido");
        $registroPacientes->segundoApellido=$request->input("segundoApellido");
        $registroPacientes->id_pais=$request->input("id_pais");
        $registroPacientes->idDepartamento=$request->input("idDepartamento");
        $registroPacientes->idMunicipio=$request->input("idMunicipio");
        $registroPacientes->direccion=$request->input("direccion");
        $registroPacientes->nombrePadre=$request->input("nombrePadre");
        $registroPacientes->nombreMadre=$request->input("nombreMadre");
        $registroPacientes->fechaNacimiento=$request->input("fechaNacimiento");
        $registroPacientes->sexo=$request->input("sexo");
        $registroPacientes->telefono=$request->input("telefono");

        $registroPacientes->save();
        return redirect()->route("listaPaciente")->with("exito","Se registró exitosamente el cliente");
    }

    public function paises(Request $request){
        if(isset($request->texto)){
            $paises = Registro_paise::whereid_depto($request->texto)->get();
            return response()->json(
                [
                    'lista' => $paises,
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
