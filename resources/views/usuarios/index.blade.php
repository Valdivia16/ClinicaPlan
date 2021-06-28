@extends('layouts.plantilla')
@section("tituloenca")
    <h2 style="text-align:center">Registro del Paciente</h2>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/diseno/css/tablas.css">
@endsection
@section("contenido")
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title row">
                        <div class="col-sm-10"><h2>Registro <b>Usuarios</b></h2></div>
                        <div class="col-md-2">
                            <a class="btn-sm btn-success"
                               href="{{route("registro.crear")}}">
                                Nuevo Usuario</a>
                        </div>
                </div>
                <table class="table table-striped table-hover ">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>rol</th>
                        <th>Correo</th>
                        <th>foto</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $item=> $user)
                        <tr id="">
                            <th >{{$user->id}}</th>
                            <td >{{$user->name}}</td>
                            <td >{{$user ->rol}}</td>
                            <td >{{$user ->email}}</td>
                            <td >{{$user ->imagen}}</td>
                            <td align="center">
                                <a class="btn-sm btn-success"
                                   href="{{route("usuario.editar",["id"=>$user->id])}}">
                                    <i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
