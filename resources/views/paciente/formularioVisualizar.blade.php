@extends('layouts.plantilla')
@section('contenido')
@section("tituloenca")
    <h2>Datos del Paciente</h2>

@endsection
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title> Datos Paciente</title>
    <style>
        .pare {
            display: grid;
            grid-gap: 5px;
            grid-template-columns: 1fr 1fr;
        }
    </style>



<div class="container-fluid" >
    <div class="card card-body">
        <div class="container-fluid">
            <div class="container" id="advanced-search-form">
                @foreach($paciente as $pacientes)

                    <label>{{$pacientes->created_at}}</label>
                    <div>
                        <h3 style="text-align: center"><strong>Identificación</strong></h3>

                        <br>
                        <br>
                        <div class="form-group col-md-12" style="text-align: center">


                        </div>
                    </div>


                    <div class="col-md-112 col-sm-12 col-lg-12">




                            <div class="d-flex flex-column form-group col-md-3 img-fluid rounded-circle pare" style="text-align-all: right">
                                <div class="profile pare" style="align-content: center">
                                    <img src="/foto/{{$pacientes->foto}}"  class="img-fluid rounded-circle"
                                         style="align-content: center"
                                         onerror="this.src='diseno/images/doctora.jpg'">
                                </div>

                            </div>

                            <div class="form-group col-md-4">
                                <label for="dni">DNI:</label>
                                <br>
                                <label>{{$pacientes->dni}}</label>
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="nda">Número de Afiliación:</label>
                                <br>
                                <label>{{$pacientes->nda}}</label>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telefono">Télefono:</label>
                                <br>
                                <label>{{$pacientes->telefono}}</label>
                            </div>

                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="form-group col-md-4">
                                    <label for="primerNombre">Primer Nombre:</label>
                                    <br>
                                    <label>{{$pacientes->primerNombre}}</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="segundoNombre">Segundo Nombre:</label>
                                    <br>
                                    <label> {{$pacientes->segundoNombre}}</label>

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="primerApellido">Primer Apellido:</label>
                                    <br>
                                    <label> {{$pacientes->primerApellido}}</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="segundoApellido">Segundo Apellido:</label>
                                    <br>
                                    <label>{{$pacientes->segundoApellido}}</label>

                                </div>
                            </div>
                            <div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="id_pais">País:</label>
                                        <br>
                                        <label>{{$pacientes->pais}}</label>
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="idDepartamento">Departamento:</label>
                                        <br>
                                        <label>{{$pacientes->departamento}}</label>
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="municipio">Municipio:</label>
                                        <br>
                                        <label>{{$pacientes->municipio}}</label>
                                    </div>

                                    <div class="form-group form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="direccion">Dirección:</label>
                                        <br>
                                        <label>{{$pacientes->direccion}} </label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="nombrePadre">Nombre del Padre:</label>
                                        <br>
                                        <label>{{$pacientes->nombrePadre}}</label>
                                    </div>
                                    <divc class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="nombreMadre">Nombre de la Madre:</label>
                                        <br>
                                        <label>{{$pacientes->nombreMadre}}</label>

                                    </divc>
                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="fechaNacimiento">Fecha de nacimiento:</label>
                                        <br>
                                        <label>{{$pacientes->fechaNacimiento}}</label>

                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label>Género:</label>
                                        <br>
                                        <label>{{$pacientes->sexo}}</label>
                                    </div>



                            </div>


                        </div>
                            </div>
                        @endforeach
                    </div>

            </div>
        </div>
    </div>
@endsection
