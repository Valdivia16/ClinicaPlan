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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">



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
    @if($errors->any())
        <div class="alert alert-warning alert-dismissible fade show " role="alert">

            @foreach ($errors->all() as $error)
                <span class="fa fa-exclamation-triangle"></span> {{ $error }}
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalReferencia">Agregar referencia</a>
    <div class="pagination pagination-sm">
        <form  class="d-none d-md-inline-block form-inline
                           ml-auto mr-0 mr-md-2 my-0 my-md-0 mb-md-2">
            <div class="input-group" style="width: 300px">
                <input class="form-control" name="busqueda" type="search" placeholder="busqueda"
                       aria-label="busqueda">
                <div class="input-group-append">
                    <a id="borrarBusqueda" class="btn btn-danger hideClearSearch" style="color: white"
                       href="{{route("referenciaEnfermedad")}}">&times;</a>
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
                        <div class="col-sm-6"><h2>Tabla de referencias de enfermedades </h2></div>

                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>

                    <th>Código</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($registroEnfermedad as $registroEnfermedades)

                    <td>{{$registroEnfermedades->codigo}}</td>
                    <td>{{$registroEnfermedades->descripcion}}</td>
                    <td>

                            <button  class="btn btn-sm  btn-primary"
                                id="editarReferencia{{$registroEnfermedades->id}}"
                                data-toggle="modal"
                                data-target="#modalEditar"
                                 data-descripcion="{{$registroEnfermedades->descripcion}}"
                                 data-id="{{$registroEnfermedades->id}}"
                                data-codigo="{{$registroEnfermedades->codigo}}"
                                title="Editar">
                                <i class="fas fa-edit "></i>
                            </button>
                    </td>

                    <td>
                            <button class="btn btn-sm  btn-danger"
                                    title="Borrar"
                                    data-toggle="modal"
                                    data-target="#modalBorrar"
                                    data-id="{{$registroEnfermedades->id}}"
                                    data-descripcion="{{$registroEnfermedades->descripcion}}">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                    </td>

                </tbody>

                @endforeach

            </table>
        </div>
        <div class="pagination pagination-sm justify-content-center">
            {{$registroEnfermedad->links("pagination::bootstrap-4")}}
        </div>
    </div>

    <!--Modal registrar enfermedares-->
    <div class="modal fade" id="modalReferencia" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #2a2a35">
                    <h5 class="modal-title" style="color: white"><span class="fas fa-pencil-alt"></span>Agregar referencia de una nueva enfermedad</h5>

                </div>
                <form method="post" action="{{route("crearReferencia.crear")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body" style="object-fit: fill">
                        <div class="form-group">
                            <label for="codigo">Código:</label>
                            <input type="text"
                                   class="form-control @error('codigo') is-invalid @enderror"
                                   name="codigo" id="codigo" maxlength="30"
                                   value="{{old('codigo')}}" required>
                            @error('codigo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="descripcion" >Descripción:</label>
                            <textarea class="form-control @error('descripcion') is-invalid @enderror"
                                      name="descripcion"
                                      id= "descripcion"
                                      >
                            {{Request::old('descripcion')}}</textarea>
                            @error('descripcion')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >Guardar</button>
                        <button type="button" class="btn btn-danger cerrarModal " >Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal eliminar-->


    <div class="modal fade" id="modalBorrar" tabindex="-1" role="dialog">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <form method="post" action="{{route("borrarEnfermedad")}}" enctype="multipart/form-data">
                    @method("DELETE")
                    @csrf
                    <div class="modal-header" style="background: #2a2a35">
                        <h5 class="modal-title" style="color: white"><span class="fas fa-trash"></span> Borrar  referencia de enfermedad</h5>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro que deseas borrar la refencia label <label
                            id="descripcion"></label>? <p>
                    </div>
                    <div class="modal-footer">
                        <input id="id" name="id" type="hidden" value="">
                        <button type="submit" class="btn btn-danger">Borrar</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <!--Modal editar-->


    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #2a2a35">
                    <h5 class="modal-title" style="color: white"><span class="fas fa-pencil-alt"></span> Editar referencia
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="color: white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{route("editarReferencia")}}" enctype="multipart/form-data">
                    @method('PUT');
                    @csrf
                    <div class="modal-body" style="object-fit: fill">
                        <div class="form-group">
                            <label for="codigo">Código:</label>
                            <input required="required" type="text"
                                   class="form-control
                                 @error('codigo') is-invalid @enderror" name="codigo" id="codigo" maxlength="30"
                                   value="{{old('codigo')}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div>
                        <label for="descripcion" >Descripción: </label>
                        <textarea class="form-control @error('description') is-invalid @enderror"
                                  name="descripcion"
                                  id="descripcion"
                        >{{Request::old('descripcion')}}</textarea>
                        @error('descripcion')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="submit" class="btn btn-success" >Editar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
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
//cerrar modal
        $(".cerrarModal").click(function(){
            $("#modalReferencia").modal('hide')
        });
//cerrar modal
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


