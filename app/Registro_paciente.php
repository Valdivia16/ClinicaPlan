<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro_paciente extends Model
{
    protected $fillable = ["nda","dni","primerNombre","segundoNombre","primerApellido","segundoApellido","id_pais'","idDepartamento",
        "idMunicipio","direccion","telefono","nombrePadre","nombreMadre","'fechaNacimiento","sexo","foto"];

}
