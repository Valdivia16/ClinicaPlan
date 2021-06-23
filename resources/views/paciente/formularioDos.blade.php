@extends("layouts.plantilla")
@section("tituloenca")
    <h2 style="text-align:center">Registro del Paciente</h2>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <title>Registro Paciente</title>
    </head>
@endsection
@section("contenido")
    <div class="container-fluid" >
        <div class="card card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="container-fluid">

                <div class="container" id="advanced-search-form">
                    <form method="post" action="{{route("registroPaciente.crear")}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div>
                            <h3 style="text-align:center">Antecedentes</h3>
                            <br>
                        </div>
                        <h4 style="text-align:center">APP</h4>
                        <div class="col-md-12 col-sm-12 col-lg-12">

                            <div class="form-group col-md-3">
                                <label for="dni">HTA</label>
                                <input  type="checkbox"  class="form-control @error('dni') is-invalid @enderror"
                                        placeholder="Ingrese el DNI" id="dni"  name="dni"  required >
                            </div>
                            <div class="form-group col-md-3 ">
                                <label for="nda">Número de Afiliación</label>
                                <input type="text" class="form-control @error('nda') is-invalid @enderror" placeholder="Ingrese el Número de Afiliación" id="nda" name="nda" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefono">Télefono</label>
                                <input type="number" class="form-control @error('telefono') is-invalid @enderror"
                                       placeholder="Ingrese el número telefónico" id="telefono" name="telefono">
                            </div>

                            <div class="profile-userpic col-md-3 col-xs-12 col-sm-3" style="margin-left: 8%">
                                <a
                                    data-toggle="modal" data-target="#modalBorrarApertura">
                                    <img style="text-align: right" src="diseno/images/pacientes/"
                                         onerror="this.src='diseno/images/doctora.jpg'" width="100"
                                         class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                </a>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group col-md-4">
                                <label for="primerNombre">Primer Nombre</label>
                                <input type="text" class="form-control @error('primerNombre') is-invalid @enderror"
                                       placeholder="Ingrese el Primer nombre" id="primerNombre" name="primerNombre" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="segundoNombre">Segundo Nombre</label>
                                <input type="text" class="form-control @error('segundoNombre') is-invalid @enderror"
                                       placeholder="Ingrese el Segundo Nombre" id="segundoNombre" name="segundoNombre">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="primerApellido">Primer Apellido</label>
                                <input type="text" class="form-control @error('primerApellido') is-invalid @enderror"
                                       placeholder="Ingrese el Primer Apellido" id="primerApellido" name="primerApellido" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="segundoApellido">Segundo Apellido</label>
                                <input type="text" class="form-control @error('segundoApellido') is-invalid @enderror"
                                       placeholder="Ingrese el segundo Apellido" id="segundoApellido" name="segundoApellido" >
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
                                    <select id="id_pais"
                                            name="id_pais"
                                            class="form-control @error('id_pais') is-invalid @enderror" required>
                                        <option selected disabled>Seleccione una opción</option>
                                        @foreach($paises as $pais)
                                            <option value="{{$pais->id}}">{{$pais->pais}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                    <label for="idDepartamento">Departamento</label>
                                    <select id="idDepartamento"
                                            name="idDepartamento"
                                            class="form-control @error('idDepartamento') is-invalid @enderror" required>
                                        <option value="" selected disabled>Seleccione una opción</option>
                                        @foreach($departamentos as $pais)
                                            <option value="{{$pais->id}}">{{$pais->departamento}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                    <label for="municipio">Municipio</label>
                                    <select id="idMunicipio"
                                            name="idMunicipio"
                                            class="form-control @error('idMunicipio') is-invalid @enderror" required>
                                        <option value="" selected disabled>Seleccione una opción</option>
                                        @foreach($municipios as $pais)
                                            <option value="{{$pais->id}}">{{$pais->municipio}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group form-group col-md-3 col-sm-3 col-lg-3">
                                    <label for="direccion">Dirección</label>
                                    <input type="text" class="form-control @error('direccion') is-invalid @enderror"
                                           placeholder="Ingrese la dirección" id="direccion"  name="direccion" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                    <label for="nombrePadre">Nombre del Padre</label>
                                    <input type="text" class="form-control @error('nombrePadre') is-invalid @enderror"
                                           placeholder="Ingrese el Nombre del Padre" id="nombrePadre" name="nombrePadre">
                                </div>
                                <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                    <label for="nombreMadre">Nombre de la Madre</label>
                                    <input type="text" class="form-control @error('nombreMadre') is-invalid @enderror"
                                           placeholder="Ingrese el Nombre de la madre" id="nombreMadre" name="nombreMadre">
                                </div>
                                <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                                    <input type="date" class="form-control @error('fechaNacimiento') is-invalid @enderror"
                                           id="fechaNacimiento" name="fechaNacimiento" required>
                                </div>

                                <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                    <label>Género</label>
                                    <select id="sexo" name="sexo"
                                            class="form-control @error('sexo') is-invalid @enderror" required>
                                        <option value="" selected disabled>Seleccione una opción</option>
                                        @foreach($sexos as $sexo)
                                            <option value="{{$sexo->id}}">{{$sexo->sexo}}</option>
                                        @endforeach

                                    </select>

                                    <button
                                        type="submit" class="btn btn-primary mr-3" name="login"
                                        value="login">Siguiente
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
