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
                <form method="post" action="{{route("editarPaciente",['id'=>$pacientes->id])}}" enctype="multipart/form-data"
                      enctype="multipart/form-data">
                    @csrf
                    <div>
                        <h3 style="text-align: center">Identificación</h3>
                        <br>
                        <br>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group col-md-3">
                            <label for="dni">DNI</label>
                            <input  type="number"
                                    @if(old("dni"))
                                    @error("dni")
                                    value="{{old("dni")}}"
                                    @enderror
                                    @else
                                    value="{{$pacientes->dni}}"
                                    @endif
                                    class="form-control @error('dni') is-invalid @enderror"
                                    placeholder="Ingrese el DNI" id="dni"  name="dni"  required >
                        </div>
                        <div class="form-group col-md-3 ">
                            <label for="nda">Número de Afiliación</label>
                            <input type="text"
                                   @if(old("nda"))
                                   @error("nda")
                                   value="{{old("nda")}}"
                                   @enderror
                                   @else
                                   value="{{$pacientes->nda}}"
                                   @endif
                                   class="form-control @error('nda') is-invalid @enderror" placeholder="Ingrese el Número de Afiliación" id="nda" name="nda" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="telefono">Télefono</label>
                            <input type="number"
                                   @if(old("telefono"))
                                   @error("telefono")
                                   value="{{old("telefono")}}"
                                   @enderror
                                   @else
                                   value="{{$pacientes->telefono}}"
                                   @endif
                                   class="form-control @error('telefono') is-invalid @enderror"
                                   placeholder="Ingrese el número telefónico" id="telefono" name="telefono">
                        </div>

                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group col-md-4">
                            <label for="primerNombre">Primer Nombre</label>
                            <input type="text"
                                   @if(old("primerNombre"))
                                   @error("primerNombre")
                                   value="{{old("primerNombre")}}"
                                   @enderror
                                   @else
                                   value="{{$pacientes->primerNombre}}"
                                   @endif
                                   class="form-control @error('primerNombre') is-invalid @enderror"
                                   placeholder="Ingrese el Primer nombre" id="primerNombre" name="primerNombre" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="segundoNombre">Segundo Nombre</label>
                            <input type="text"
                                   @if(old("segundoNombre"))
                                   @error("segundoNombre")
                                   value="{{old("segundoNombre")}}"
                                   @enderror
                                   @else
                                   value="{{$pacientes->segundoNombre}}"
                                   @endif
                                   class="form-control @error('segundoNombre') is-invalid @enderror"
                                   placeholder="Ingrese el Segundo Nombre" id="segundoNombre" name="segundoNombre">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="primerApellido">Primer Apellido</label>
                            <input type="text"
                                   @if(old("primerApellido"))
                                   @error("primerApellido")
                                   value="{{old("primerApellido")}}"
                                   @enderror
                                   @else
                                   value="{{$pacientes->primerApellido}}"
                                   @endif
                                   class="form-control
                                   @error('primerApellido') is-invalid @enderror"
                                   placeholder="Ingrese el Primer Apellido" id="primerApellido" name="primerApellido" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="segundoApellido">Segundo Apellido</label>
                            <input type="text"
                                   @if(old("segundoApellido"))
                                   @error("segundoApellido")
                                   value="{{old("segundoApellido")}}"
                                   @enderror
                                   @else
                                   value="{{$pacientes->segundoApellido}}"
                                   @endif
                                   class="form-control @error('segundoApellido') is-invalid @enderror"
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
                                        <option value="{{$pais->id}}"
                                            @if($pacientes->id_pais)
                                                value="{{$pacientes->id_pais}}"
                                                {{$pacientes->id_pais == $pais->id ? 'selected="selected"':''}}
                                            @endif
                                            @if(old("id_pais"))
                                                {{old("id_pais") == $pais->id ? 'selected="selected"':''}}
                                            @endif
                                            >{{$pais->pais}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label for="idDepartamento">Departamento</label>
                                <select id="idDepartamento"
                                        name="idDepartamento"
                                        class="form-control @error('idDepartamento') is-invalid @enderror" required>
                                    <option selected disabled>Seleccione una opción</option>
                                    @foreach($departamentos as $departamento)
                                        <option value="{{$pacientes->idDepartamento}}"
                                                @if($pacientes->idDepartamento)
                                                value="{{$pacientes->id_departamento}}"
                                            {{$pacientes->idDepartamento == $departamento->id ? 'selected="selected"':''}}
                                            @endif
                                        @if(old("idDepartamento"))
                                            {{old("idDepartamento") == $departamento->id ? 'selected="selected"':''}}
                                            @endif
                                        >{{$departamento->departamento}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label for="municipio">Municipio</label>
                                <select id="idMunicipio"
                                        name="idMunicipio"
                                        class="form-control @error('idMunicipio') is-invalid @enderror" required>
                                    <option selected disabled>Seleccione una opción</option>
                                    @foreach($municipios as $municipio)
                                        <option value="{{$pacientes->idMunicipio}}"
                                                @if($pacientes->idMunicipio)
                                                value="{{$pacientes->idMunicipio}}"
                                            {{$pacientes->idMunicipio == $municipio->id ? 'selected="selected"':''}}
                                            @endif
                                        @if(old("idMunicipio"))
                                            {{old("idMunicipio") == $municipio->id ? 'selected="selected"':''}}
                                            @endif
                                        >{{$municipio->municipio}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group form-group col-md-3 col-sm-3 col-lg-3">
                                <label for="direccion">Dirección</label>
                                <input type="text"
                                       @if(old("direccion"))
                                       @error("direccion")
                                       value="{{old("direccion")}}"
                                       @enderror
                                       @else
                                       value="{{$pacientes->direccion}}"
                                       @endif
                                       class="form-control @error('direccion') is-invalid @enderror"
                                       placeholder="Ingrese la dirección" id="direccion"  name="direccion" required>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label for="nombrePadre">Nombre del Padre</label>
                                <input type="text"
                                       @if(old("nombrePadre"))
                                       @error("nombrePadre")
                                       value="{{old("nombrePadre")}}"
                                       @enderror
                                       @else
                                       value="{{$pacientes->nombrePadre}}"
                                       @endif
                                       class="form-control @error('nombrePadre') is-invalid @enderror"
                                       placeholder="Ingrese el Nombre del Padre" id="nombrePadre" name="nombrePadre">
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label for="nombreMadre">Nombre de la Madre</label>
                                <input type="text"
                                       @if(old("nombreMadre"))
                                       @error("nombreMadre")
                                       value="{{old("nombreMadre")}}"
                                       @enderror
                                       @else
                                       value="{{$pacientes->nombreMadre}}"
                                       @endif
                                       class="form-control @error('nombreMadre') is-invalid @enderror"
                                       placeholder="Ingrese el Nombre de la madre" id="nombreMadre" name="nombreMadre">
                            </div>
                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label for="fechaNacimiento">Fecha de nacimiento</label>
                                <input type="date"
                                       @if(old("fechaNacimiento"))
                                       @error("fechaNacimiento")
                                       value="{{old("fechaNacimiento")}}"
                                       @enderror
                                       @else
                                       value="{{$pacientes->fechaNacimiento}}"
                                       @endif
                                       class="form-control @error('fechaNacimiento') is-invalid @enderror"
                                       id="fechaNacimiento" name="fechaNacimiento" required>
                            </div>

                            <div class="form-group col-md-3 col-sm-3 col-lg-3">
                                <label>Género</label>
                                <select id="sexo" name="sexo"
                                        class="form-control @error('sexo') is-invalid @enderror" required>
                                    <option value="" selected disabled>Seleccione una opción</option>
                                    @foreach($sexos as $sexo)
                                        <option value="{{$pacientes->sexo}}"
                                                @if($pacientes->sexo)
                                                value="{{$pacientes->sexo}}"
                                            {{$pacientes->sexo == $sexo->id ? 'selected="selected"':''}}
                                            @endif
                                        @if(old("sexo"))
                                            {{old("sexo") == $sexo->id ? 'selected="selected"':''}}
                                            @endif
                                        >{{$sexo->sexo}}
                                        </option>
                                    @endforeach

                                </select>
<br>
                                <button
                                    type="submit" class="btn btn-primary mr-3" name="login"
                                    value="login">Siguiente
                                </button>
                        </div>
                    </div>
                    </div>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>

</html>
