<?php

namespace App\Http\Controllers;

use App\ReferenciaEnfermedad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferenciaEnfermedadController extends Controller
{
    //

    public function busqueda(Request $request){
        $busqueda = $request->input("busqueda");
        $registroEnfermedad = ReferenciaEnfermedad::where("descripcion","like","%".$request->input
            ("busqueda")."%")->paginate(20);

        return view("paciente.referenciaEnfermedades")->with("busqueda",$busqueda)->with("registroEnfermedad",$registroEnfermedad);
    }

    public function index(){
        $registroEnfermedad = ReferenciaEnfermedad::all();

        Return view ('paciente.referenciaEnfermedades')
            ->with('registroEnfermedad', $registroEnfermedad);

    }



    public function crear(){
        $registroEnfermedad = ReferenciaEnfermedad::all();

        Return view ('paciente.referenciaEnfermedades')
            ->with('registroEnfermedad', $registroEnfermedad);
    }
    //crear usuario
    public function store(Request $request){

$this->validate($request,[
    'codigo'=> 'required',
    'descripcion'=> 'required',

]);
        $nombre = $request->input("codigo");
        $registroEnfermedad = new ReferenciaEnfermedad();
        $registroEnfermedad->codigo=$request->input("codigo");
        $registroEnfermedad->descripcion=$request->input("descripcion");
        $registroEnfermedad->save();

        //return response()->json($registroPacientes );
        return redirect()->route("referenciaEnfermedad")->with("Se registro una nueva Referencia");

    }


    public function indexEditar($id){
        $registroEnfermedad  = ReferenciaEnfermedad::findOrFail($id);
        Return view ('paciente.referenciaEnfermedades')
            ->with('registroEnfermedad', $registroEnfermedad);

    }
//mostrar datos
    public function mostrar(){

        $registroEnfermedad = ReferenciaEnfermedad::all();


        Return view ('paciente.referenciaEnfermedades', compact('registroEnfermedad'));
    }


    //editar

    public function edit(Request $request , $id)

    {
        $registroEnfermedad = ReferenciaEnfermedad::findOrFail($id);
        $registroEnfermedad->codigo=$request->input("codigo");
        $registroEnfermedad->descripcion=$request->input("descripcion");
        $registroEnfermedad->save();


        return redirect()->route("referenciaEnfermedad")->withExito("Se editó correctamente");

    }
//eliminar
    public function borrarEnfermedad($id){
        ReferenciaEnfermedad::destroy($id);


        return redirect()->route("referenciaEnfermedad")
            ->withExito("Se eliminó exitosamente el paciente");

    }


}
