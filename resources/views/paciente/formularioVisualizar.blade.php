<!DOCTYPE html>
<html lang="en">
<h2 style="text-align:center">Registro del Paciente</h2>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Registro Paciente</title>
</head>
<div class="container-fluid" >
    <div class="card card-body">
        <div class="container-fluid">
            <div class="container" id="advanced-search-form">
                    <div>
                        <h3 style="text-align: center">Identificación</h3>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        @foreach($paciente as $pacientes)
                            <div class="form-group col-md-3">
                                <label for="dni">DNI</label>
                                <label>{{$pacientes->dni}}</label>
                            </div>
                            <div class="form-group col-md-3 ">
                                <label for="nda">Número de Afiliación</label>
                                <label>{{$pacientes->nda}}</label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefono">Télefono</label>
                                <label>{{$pacientes->telefono}}</label>
                            </div>

                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="form-group col-md-4">
                                    <label for="primerNombre">Primer Nombre</label>
                                    <label>{{$pacientes->primerNombre}}</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="segundoNombre">Segundo Nombre</label>
                                    <label> {{$pacientes->segundoNombre}}</label>

                                </div>

                                <div class="form-group col-md-4">
                                    <label for="primerApellido">Primer Apellido</label>
                                    <label> {{$pacientes->primerApellido}}</label>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="segundoApellido">Segundo Apellido</label>
                                    <label>{{$pacientes->segundoApellido}}</label>
                                    <br>
                                </div>
                            </div>
                            <div>
                                <div style="margin-top: 20%">
                                    <h3 style="text-align: center">Datos personales</h3>
                                </div>

                                <div>
                                    <h5 >Lugar de nacimiento</h5>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="id_pais">País</label>
                                        <label>{{$pacientes->id_pais}}</label>
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="idDepartamento">Departamento</label>
                                        <label>{{$pacientes->idDepartamento}}</label>
                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="municipio">Municipio</label>
                                        <label>{{$pacientes->idMunicipio}}</label>
                                    </div>

                                    <div class="form-group form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="direccion">Dirección</label>
                                        <label>{{$pacientes->direccion}} </label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-lg-12">
                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="nombrePadre">Nombre del Padre</label>
                                        <label>{{$pacientes->nombrePadre}}</label>
                                    </div>
                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="nombreMadre">Nombre de la Madre</label>
                                        <label>{{$pacientes->nombreMadre}}</label>

                                    </div>
                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label for="fechaNacimiento">Fecha de nacimiento</label>
                                        <label>{{$pacientes->fechaNacimiento}}</label>

                                    </div>

                                    <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                        <label>Género</label>
                                        <label>{{$pacientes->sexo}}</label>



                                <div>
                                    <button
                                        type="submit" class="btn btn-primary mr-3" name="login"
                                        value="login">Siguiente
                                    </button>
                                </div>
                            </div>

                        </div>
                            </div>
                        @endforeach
                    </div>

            </div>


        </div>
    </div>
</div>

</html>
