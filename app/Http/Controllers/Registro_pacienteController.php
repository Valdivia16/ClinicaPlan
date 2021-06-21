<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Municipio;
use App\Registro_paciente;
use App\Registro_paise;
use App\Sexo;
use Illuminate\Http\Request;

class Registro_pacienteController extends Controller
{
    public function index(){
        $pacientes = RegistroPaciente::all();
        Return view ('paciente.listaPaciente',compact("pacientes"));
    }

    public function crear(){
        $paises = Registro_paise::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $sexos = Sexo::all();
        Return view ('paciente.formulario')
            ->with('departamentos',$departamentos)
            ->with('paises',$paises)
            ->with('sexos',$sexos)
            ->with('municipios',$municipios);
    }
    public function store(Request $request){
      /*  $this->validate($request,[
            "dni"=>"required|numeric|max:13|min:13|unique",
            "nda"=>"required|max:14|min:14|unique",
            "telefono"=>"required|numeric|max:8|min:8|unique",
            "primerNombre"=>"required|max:100|min:3",
            "segundoNombre"=>"required|max:100|min:3",
            "primerApellido"=>"required|max:100|min:3",
            "segundoApellido"=>"required|max:100|min:3",
            "id_pais"=>"required",
            "idDepartamento"=>"required",
            "idMunicipio"=>"required",
            "direccion"=>"required|max:250|min:3",
            "nombrePadre"=>"required|max:250|min:3",
            "nombreMadre"=>"required|max:250|min:3",
            "fechaNacimiento"=>"required",
            "sexo"=>"required",

            //"telefono"=>"required|numeric|min:10000000|max:99999999|unique:clientes,telefono"
        ],[
            "dni.required"=>"Campo vacío",
            "dni.max"=>"EL campo debe de tener 13 dígitos",
            "dni.min"=>"EL campo debe de tener 13 dígitos",
            "nda.required"=>"Campo vacío",
            "telefono.required"=>"Campo vacío",
            "primerNombre.requerid"=>"Campo vacío",
            "segundoNombre"=>"Campo vacío",
            "primerApellido.requerid"=>"Campo vacío",
            "segundoApellido"=>"Campo vacío",
            "id_pais.requerid"=>"Campo vacío",
            "idDepartamento.requerid"=>"Campo vacío",
            "idMunicipio.requerid"=>"Campo vacío",
            "direccion.requerid"=>"Campo vacío",
            "nombrePadre"=>"Campo vacío",
            "nombreMadre"=>"Campo vacío",
            "fechaNacimiento.requerid"=>"Campo vacío",
            "sexo.requerid"=>"Campo vacío",
        ]);
*/

        $registroPacientes = new Registro_paciente();
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

        return redirect()->route("home")->with("Primer paso completado");

    }

}
