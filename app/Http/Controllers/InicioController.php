<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class InicioController extends Controller
{
    //

    public function index(){
        Return view ('inicio');
    }

}
