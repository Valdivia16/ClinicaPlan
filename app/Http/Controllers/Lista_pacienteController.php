<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Lista_pacienteController extends Controller
{
    //

    public function index(){

        Return view ('paciente.listaPaciente');
    }
}
