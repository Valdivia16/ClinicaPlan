<?php

namespace App\Http\Controllers;

use App\FormularioDo;
use Illuminate\Http\Request;

class FormularioDoController extends Controller
{

    public function index()
    {
        $formularioDo= FormularioDo::orderBy('id')->paginate(3);

        Return view('paciente.formularioDos', compact("formularioDo"));
    }



    //crear usuario
    public function store(Request $request)
    {


        $formularioDo = new FormularioDo();

        $formularioDo->htp = $request->input("htp");
        $formularioDo->dm = $request->input("dm");
        $formularioDo->ab = $request->input("ab");
        $formularioDo->ca = $request->input("ca");
        $formularioDo->hipe = $request->input("hipe");
        $formularioDo->depe = $request->input("depe");
        $formularioDo->vih = $request->input("vih");
        $formularioDo->taba = $request->input("taba");
        $formularioDo->ede = $request->input("ede");
        $formularioDo->aco = $request->input("aco");
        $formularioDo->alco = $request->input("alco");
        $formularioDo->drogas = $request->input("drogas");
        $formularioDo->tvp = $request->input("tvp");
        $formularioDo->otroapp = $request->input("otroapp");
        $formularioDo->descripcionapp = $request->input("descripcionapp");

        $formularioDo->dia = $request->input("dia");
        $formularioDo->epi = $request->input("epi");
        $formularioDo->aler = $request->input("aler");
        $formularioDo->otroapf = $request->input("otroapf");
        $formularioDo->descripcionapf = $request->input("descripcionapf");

        $formularioDo->traumasi = $request->input("traumasi");
        $formularioDo->traumano = $request->input("traumano");
        $formularioDo->descripcionqui = $request->input("descripcionqui");

        $formularioDo->alersi = $request->input("alersi");
        $formularioDo->alerno = $request->input("alerno");
        $formularioDo->descripcionaler = $request->input("descripcionaler");

        $formularioDo->emba = $request->input("emba");
        $formularioDo->partos = $request->input("partos");
        $formularioDo->cesaria = $request->input("cesaria");
        $formularioDo->hijovivo = $request->input("hijovivo");
        $formularioDo->embaActual = $request->input("embaActual");
        $formularioDo->lacta = $request->input("lacta");
        $formularioDo->cito = $request->input("cito");
        $formularioDo->aborto = $request->input("aborto");
        $formularioDo->mestrua = $request->input("mestrua");
        $formularioDo->pla = $request->input("pla");
        $formularioDo->descripcionfin = $request->input("descripcionfin");

        $formularioDo->save();

        //return response()->json($registroPacientes );
        return redirect()->route("home")->with("Primer paso completado");

    }


    public function indexEditar($id)
    {
        $paciente = Registro_paciente::findOrFail($id);
        $paises = Registro_paise::all();
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $sexos = Sexo::all();
        Return view('paciente.formulario1Edirar')
            ->with('pacientes', $paciente)
            ->with('departamentos', $departamentos)
            ->with('paises', $paises)
            ->with('sexos', $sexos)
            ->with('municipios', $municipios);

    }

//mostrar datos
    public function mostrar(Request $request, $id)
    {
        $paciente = DB::table('registro_pacientes as rp')
            ->join("sexos as s", "rp.sexo", 's.id')
            ->join('registro_paises as p', 'id_pais', 'p.id')
            ->join('departamentos as d', 'idDepartamento', 'd.id')
            ->join('municipios as m', 'idMunicipio', 'm.id')
            ->select('p.pais', 'd.departamento', 'm.municipio', 'rp.*', 's.sexo')
            ->where('rp.id', '=', $id)->paginate(20);
        return view('paciente.formularioVisualizar', compact('paciente'));
    }


    //editar

    public function edit(Request $request, $id)
    {
        $formularioDo =  FormularioDo::findOrFail($id);

        $formularioDo->htp = $request->input("htp");
        $formularioDo->dm = $request->input("dm");
        $formularioDo->ab = $request->input("ab");
        $formularioDo->ca = $request->input("ca");
        $formularioDo->hipe = $request->input("hipe");
        $formularioDo->depe = $request->input("depe");
        $formularioDo->vih = $request->input("vih");
        $formularioDo->taba = $request->input("taba");
        $formularioDo->ede = $request->input("ede");
        $formularioDo->aco = $request->input("aco");
        $formularioDo->alco = $request->input("alco");
        $formularioDo->drogas = $request->input("drogas");
        $formularioDo->tvp = $request->input("tvp");
        $formularioDo->otroapp = $request->input("otroapp");
        $formularioDo->descripcionapp = $request->input("descripcionapp");

        $formularioDo->dia = $request->input("dia");
        $formularioDo->epi = $request->input("epi");
        $formularioDo->aler = $request->input("aler");
        $formularioDo->otroapf = $request->input("otroapf");
        $formularioDo->descripcionapf = $request->input("descripcionapf");

        $formularioDo->traumasi = $request->input("traumasi");
        $formularioDo->traumano = $request->input("traumano");
        $formularioDo->descripcionqui = $request->input("descripcionqui");

        $formularioDo->alersi = $request->input("alersi");
        $formularioDo->alerno = $request->input("alerno");
        $formularioDo->descripcionaler = $request->input("descripcionaler");

        $formularioDo->emba = $request->input("emba");
        $formularioDo->partos = $request->input("partos");
        $formularioDo->cesaria = $request->input("cesaria");
        $formularioDo->hijovivo = $request->input("hijovivo");
        $formularioDo->embaActual = $request->input("embaActual");
        $formularioDo->lacta = $request->input("lacta");
        $formularioDo->cito = $request->input("cito");
        $formularioDo->aborto = $request->input("aborto");
        $formularioDo->mestrua = $request->input("mestrua");
        $formularioDo->pla = $request->input("pla");
        $formularioDo->descripcionfin = $request->input("descripcionfin");

        $formularioDo->save();

        return redirect()->route("home")->withExito("Se editó correctamente");

    }

//eliminar





}
