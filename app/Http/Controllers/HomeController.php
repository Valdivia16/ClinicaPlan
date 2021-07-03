<?php

namespace App\Http\Controllers;

use App\Registro_paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request){
      //  $paciente['pacientes']= Registro_paciente::paginate()ñ

        $busqueda = $request->input("busqueda");
        $paciente= DB::table('registro_pacientes as rp')
            ->join("sexos as s","rp.sexo",'s.id')
            ->select('rp.id','rp.dni','rp.nda','primerNombre','primerApellido','s.sexo')
            ->where("dni","like","%".$request->input
            ("busqueda")."%")->paginate(20);

        Return view ('home')
            ->with('paciente', $paciente)
            ->with("busqueda",$busqueda);

    }

    public function edit(Request $request)
    {

        $registroPacientes = Registro_paciente::findOrFail($request->id);
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

        return redirect()->route("home")->withExito("Se editó Correctamente");

    }
}
