@extends('layouts.plantilla')
@section("tituloenca")
    <h2>Clínica Medica Plasencia</h2>

@endsection
@section('titulo')

@endsection
@section('contenido')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clínica Medica Plasencia</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>

        body {
            color: #566787;
            background: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }
        .table-responsive {
            margin: 30px 0;
        }
        .table-wrapper {
            background: #fff;
            margin: 0 auto;
            padding: 20px 30px 5px;
            box-shadow: 0 0 1px 0 rgba(0,0,0,.25);
        }
        .table-title .btn-group {
            float: right;
        }
        .table-title .btn {
            min-width: 50px;
            border-radius: 2px;
            border: none;
            padding: 6px 12px;
            font-size: 95%;
            outline: none !important;
            height: 30px;
        }
        .table-title {
            min-width: 100%;
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 15px;
            margin-bottom: 5px;
            background: rgb(0, 50, 74);
            margin: -20px -31px 10px;
            padding: 15px 30px;
            color: #fff;
        }
        .table-title h2 {
            margin: 2px 0 0;
            font-size: 24px;
        }
        table.table {
            min-width: 100%;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;

            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 40px;
        }
        table.table tr th:last-child {
            width: 100px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table td .btn.manage {
            padding: 2px 10px;
            background: #37BC9B;
            color: #fff;
            border-radius: 2px;
        }
        table.table td .btn.manage:hover {
            background: #2e9c81;
        }
    </style>

    @if(session('pacienteEliminado'))
        <div class="alert alert-success">
            {{session('pacienteEliminado')}}}
        </div>
        @endif
<a class="btn btn-success" href="{{url('/registroPaciente')}}">Registrar Paciente</a>
    <div class="pagination pagination-sm">
        @if(session('pacienteEliminado'))
            <div class="alert alert-success">
                {{session('pacienteEliminado')}}}
            </div>
        @endif
        <form  class="d-none d-md-inline-block form-inline
                           ml-auto mr-0 mr-md-2 my-0 my-md-0 mb-md-2">
            <div class="input-group" style="width: 300px">
                <input class="form-control" name="search" type="search" placeholder="Buscar DNI"
                       aria-label="Search">
                <div class="input-group-append">
                    <a id="borrarBusqueda" class="btn btn-danger hideClearSearch" style="color: white"
                       href="{{route("home")}}">&times;</a>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6"><h2>Tabla de pacientes </h2></div>


                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>N.</th>
                        <th>DNI</th>
                        <th>NDA</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Género</th>
                        <th>Acciones</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
@foreach( $paciente as $pacientes)

    <td>{{$noPagina++}}</td>
    <td>{{$pacientes->dni}}</td>
    <td>{{$pacientes->nda}}</td>
    <td>{{$pacientes->primerNombre }} </td>
    <td> {{$pacientes->primerApellido }} </td>
    <td>{{$pacientes->nombre_sexo}}</td>
    <td>
        <form action="{{route('mostrarPaciente',$pacientes->id)}}">
            <button href= "{{route( 'mostrarPaciente',$pacientes->id)}}" class="btn btn-sm  btn-success">
                <i class="fas fa-eye"></i>
            </button>
        </form>

    </td>

    <td>
        <form action="{{route( 'pacienteEditado',['id'=>$pacientes->id])}}">
            <button href= "{{route( 'pacienteEditado',['id'=>$pacientes->id])}}" class="btn btn-sm  btn-primary">
                <i class="fas fa-edit"></i>
            </button>
        </form>

    </td>
    <td><form action="{{route('borrarPaciente',$pacientes->id)}}"
              class="d-inline formulario-eliminar"
              method="POST">
         @csrf @method('DELETE')
            <button class="d-inline formulario-eliminar btn btn-danger">
                <i class="fas fa-trash-alt"></i>

            </button>
        </form>
    </td>
                    </tbody>

    @endforeach

                </table>

            </div>

        </div>


@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El paciente ha sido elimminado.',
                'continuar',
            )
        </script>
        @endif

    <script>

        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Está seguro que desea borrar el paciente registrado?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, bórralo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                        this.submit();
                    Swal.fire(
                        '¡Eliminado!',
                        'El paciente ha sido elimminado.',
                        'Continuar',
                    )

                }
            })
        })
    </script>
@endsection

