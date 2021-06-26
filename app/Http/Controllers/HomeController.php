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

        if ($request){
            $query = trim($request->get("search"));
        }

        $paciente=DB::table("registro_pacientes")
            ->leftJoin("sexos","registro_pacientes.sexo","=","sexos.id")

            ->select("registro_pacientes.id",
                "registro_pacientes.dni",
                "registro_pacientes.nda",
                "registro_pacientes.primerNombre"
                ,"registro_pacientes.primerApellido",
                "registro_pacientes.sexo" ,"sexos.sexo as nombre_sexo")
            ->where("registro_pacientes.dni","Like","%".$query."%")
            ->orderBy("registro_pacientes.primerNombre")
            //  ->whereDate("capa_entregas.created_at","=" ,Carbon::now()->format('Y-m-d'))
->get();
        Return view ('home')->withPaciente($paciente)->withNoPagina(10);

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
