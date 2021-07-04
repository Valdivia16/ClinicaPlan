<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Municipio;
use App\Registro_paciente;
use App\Registro_paise;
use App\Sexo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Registro_pacienteController extends Controller
{
    public function index(){
        $pacientes = Registro_paciente::orderBy('id')->paginate(3);

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
    //crear usuario
    public function store(Request $request){

        /*  $validator=$this->validate($request,[
                 "dni"=>"required|numeric|max:13|min:13|unique",
                 "nda"=>"required|max:14|min:14|unique",
                 "telefono"=>"numeric|max:8|min:8|unique",
                 "primerNombre"=>"required|string|max:100|min:3",
                 "segundoNombre"=>"max:100|string|min:3",
                 "primerApellido"=>"required|string|max:100|min:3",
                 "segundoApellido"=>"max:100|string|min:3",
                 "id_pais"=>"required",
                 "idDepartamento"=>"required",
                 "idMunicipio"=>"required",
                 "direccion"=>"required|max:250|min:3",
                 "nombrePadre"=>"max:250|min:3",
                 "nombreMadre"=>"max:250|min:3",
                 "fechaNacimiento"=>"required",
                 "sexo"=>"required",

             ]);
   $this->validate($request,[
              "dni"=>"required|numeric|max:13|min:13|unique",
              "nda"=>"required|max:14|min:14|unique",
              "telefono"=>"numeric|max:8|min:8|unique",
              "primerNombre"=>"required|max:100|min:3",
              "segundoNombre"=>"max:100|min:3",
              "primerApellido"=>"required|max:100|min:3",
              "segundoApellido"=>"max:100|min:3",
              "id_pais"=>"required",
              "idDepartamento"=>"required",
              "idMunicipio"=>"required",
              "direccion"=>"required|max:250|min:3",
              "nombrePadre"=>"max:250|min:3",
              "nombreMadre"=>"max:250|min:3",
              "fechaNacimiento"=>"required",
              "sexo"=>"required",

              //"telefono"=>"required|numeric|min:10000000|max:99999999|unique:clientes,telefono"
          ],[
              "dni.required"=>"Campo vacío",
              "dni.max"=>"EL campo debe de tener 13 dígitos",
              "dni.min"=>"EL campo debe de tener 13 dígitos",
              "nda.required"=>"Campo vacío",
              "telefono"=>"Campo vacío",
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
        $nombre = $request->input("dni");



        $path = public_path() . '/foto';//Carpeta publica de las imagenes

        //-------------VALIDAR SI LA CARPETA EXISTE---------------------

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if ($request->foto) {
            $imagen = $_FILES["foto"]["name"];
            $ruta = $_FILES["foto"]["tmp_name"];
            $destino = "foto/".$nombre. $imagen;
            copy($ruta, $destino);
        }

        $registroPacientes = new Registro_paciente();

        $registroPacientes->foto =  $path."/".$nombre.$imagen;
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

        //return response()->json($registroPacientes );
       return redirect()->route("home")->with("Primer paso completado");

    }


    public function indexEditar($id){
        $paciente = Registro_paciente::findOrFail($id);
        $paises = Registro_paise::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $sexos = Sexo::all();
        Return view ('paciente.formulario1Edirar')
            ->with('pacientes', $paciente)
              ->with('departamentos',$departamentos)
                ->with('paises',$paises)
                ->with('sexos',$sexos)
                ->with('municipios',$municipios);

    }
//mostrar datos
    public function mostrar(Request $request, $id){
        $paciente= DB::table('registro_pacientes as rp')
            ->join("sexos as s","rp.sexo",'s.id')
            ->join('registro_paises as p','id_pais','p.id')
            ->join('departamentos as d','idDepartamento','d.id')
            ->join('municipios as m','idMunicipio','m.id')
            ->select('p.pais','d.departamento','m.municipio','rp.*','s.sexo')
            ->where('rp.id','=',$id)->paginate(20);
        return view('paciente.formularioVisualizar', compact('paciente'));
    }


    //editar

    public function edit(Request $request , $id)
    {
        $registroPacientes = Registro_paciente::findOrFail($id);
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

        return redirect()->route("home")->withExito("Se editó correctamente");

    }
//eliminar
    public function borrarPaciente($id){
       Registro_paciente::destroy($id);

        return redirect()->route("home")
            ->withExito("Se eliminó exitosamente el paciente");
    }


}
