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

<div class="container" id="advanced-search-form">
    <form>
        <div>
            <h3 style="text-align: center">Identificación</h3>
            <br>   <br>
        </div>
        <div class="col-12">
            <div class="form-group col-6">
                <label for="dni">DNI</label>
                <input type="number" class="form-control" placeholder="Ingrese el DNI" id="dni">
            </div>
            <div class="form-group col-6">
                <label for="nda">Número de Afiliación</label>
                <input type="number" class="form-control" placeholder="Ingrese el Número de Afiliación" id="nda">
            </div>
            <br><br><br><br><br>
        </div>
        <div class="form-group">
            <label for="primerNombre">Primer Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese el Primer nombre" id="primerNombre">
        </div>
        <div class="form-group">
            <label for="segundoNombre">Segundo Nombre</label>
            <input type="text" class="form-control" placeholder="Ingrese el Segundo Nombre" id="segundoNombre">
        </div>

        <div class="form-group">
            <label for="primerApellido">Primer Apellido</label>
            <input type="text" class="form-control" placeholder="Ingrese el Primer Apellido" id="primerApellido">
        </div>
        <div class="form-group">
            <label for="segundoApellido">Segundo Apellido</label>
            <input type="text" class="form-control" placeholder="Ingrese el segundo Apellido" id="segundoApellido">
            <br>
        </div>
        <div>

            <br>   <br><br>   <br><br>
        </div>
        <div>
            <h3 style="text-align: center">Datos personales</h3>
            <br>
        </div>


           <div>
               <h5 >Lugar de nacimiento</h5>

           </div>


        <div class="form-group">
            <label for="pais">País</label>
            <input type="text" class="form-control" placeholder="Ingrese el País" id="pais">
        </div>
        <!--
         <div class="form-group">
            <label for="departamento">Seleccione el departamento</label>
                <select id="idDepartamento"
                        name="idDepartamento"
                        class="form-control @error('idDepartamento') is-invalid @enderror" required>
                    <option value="" selected disabled>Seleccione una opción</option>
                    @foreach($departamentos as $departamento)
                        <option value="{{$departamento->id}}"><a href="{{"listaDepartamentos"}}"> {{$departamento->departamento}}</a></option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="municipio">Seleccione el municipio</label>
                    <select id="idMunicipio"
                            name="idMunicipio"
                            class="form-control @error('idMunicipio') is-invalid @enderror" required>
                        <option value="" selected disabled>Seleccione una opción</option>
                        @foreach($municipios as $municipio)
                            <option value="{{$municipio->id}}">{{$municipio->municipio}}</option>
                        @endforeach
                    </select>
                </div> -->
        <div class="form-group">
            <label for="idDepartamento">Departamento</label>
            <input type="text" class="form-control" placeholder="Ingrese el departamento" id="idDepartamento">
        </div>
        <div class="form-group">
            <label for="idMunicipio">Municipio</label>
            <input type="text" class="form-control" placeholder="Ingrese el departamento" id="idMunicipio">
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" placeholder="Ingrese la dirección" id="direccion">
        </div>

        <div class="form-group">
            <label for="nombrePadre">Nombre del Padre</label>
            <input type="text" class="form-control" placeholder="Ingrese el Nombre del Padre" id="nombrePadre">
        </div>
        <div class="form-group">
            <label for="nombreMadre">Nombre de la Madre</label>
            <input type="text" class="form-control" placeholder="Nombre de la madre" id="nombreMadre">
        </div>
        <div class="form-group">
            <label for="fechaNacimiento">Fecha de nacimiento</label>
            <input type="date" class="form-control"  id="fechaNacimiento">
        </div>
        <div class="form-group">
            <label>Genero</label>
            <div class="radio">
                <label class="radio-inline">
                    <input type="radio" name="m">Masculino</label>
                <label class="radio-inline">
                    <input type="radio" name="f">Femenino</label>
            </div>
        </div>
        <div class="form-actions">
            <button
                type="submit" class="btn btn-primary mr-3" name="login"
                value="login">Siguiente
            </button>
        </div>
    </form>
</div>



{{--Javascript
  <script type="text/javascript">
    $(function(){
          $("#idDepartamento").on("change", function () {
              var intId=$(this).val();
              var datos = {idDepartamento: intId};


          })
          });

  </script>--}}

<script type="text/javascript">
    window.onload = function(){
        $("#localidades").hide();
        $("#provincias").change(function(){
            $.ajax({
                // le pido a la url '/utils/provincia' el liostado de loclaidades
                url: "/utils/" + $(this).val(),
                method: 'GET',
                success: function(data) {
                    $('#localidades').html(data.html+"<option value='Otro'>Otro</option>");
                    $("#localidades").show();
                }
            });
        });
    }
</script>
@endsection
