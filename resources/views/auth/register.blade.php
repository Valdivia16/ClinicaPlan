@extends('layouts.plantilla')
@section("tituloenca")
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

@endsection
@section('contenido')
    <div class="container-xl" style="margin-top: -5%">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title row">
                    <div class="col-sm-10"><h2>Registro <b>Usuarios</b></h2></div>
                    <div class="col-md-2">
                        <a class="btn-sm btn-success"
                           href="{{route("registro.index")}}">
                            historial Usuarios</a>
                    </div>
                </div><hr>
                            <form method="POST" action="{{ route('registroUser.crear') }}" enctype="multipart/form-data">
                                @csrf
                            <div style="margin-left: 15%">
                                <div class="form-group">
                                    <label class="card-group">{{ __('Nombre') }}</label>
                                    <div class="col-md-10">
                                        <input placeholder="Ingrese el nombre" id="name" type="text"  maxlength="255"
                                               class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="email" class="card-group" style="text-align: justify">{{ __('Correo Eléctronico') }}</label>

                                    <div class="col-md-10">
                                        <input placeholder="Ingrese el correo eléctronico" maxlength="255" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="card-group" style="text-align: justify">{{ __('Contraseña') }}</label>

                                    <div class="col-md-10">
                                        <input placeholder="Ingrese la contraseña" id="password" minlength="8" maxlength="25" type="password" class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="card-group"
                                           style="text-align: justify">{{ __('Confirmar contraseña') }}</label>

                                    <div class="col-md-10">
                                        <input placeholder="Confirme su contraseña" maxlength="25"
                                               minlength="8" id="password-confirm" type="password"
                                               class="form-control" name="password_confirmation"
                                               style="text-align: justify" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="card-group"
                                           style="text-align: justify">{{ __('Cargo') }}</label>
                                    <div class="col-md-10 col-lg-10">
                                        <select name="rol"
                                                required="required"
                                                class=" form-select  @error('rol') is-invalid @enderror" id="rol">
                                            <option disabled selected value="s">Seleccione su cargo</option>
                                            @foreach($roles as $rol)
                                                <option value="{{$rol->id}}">{{$rol->rol}}</option>
                                            @endforeach
                                            @error('rol')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </select></div>
                                <br>
                                </div>
                                <div class="form-group col-lg-10 col-md-10">
                                    <label for="imagenCategoria" class="card-group"
                                           style="text-align: justify">Foto de Perfil: </label>
                                    <div class="input-group image-preview">
                                        <div class="form-group col-md-6">
                                            <button type="button" class="btn btn-outline-danger image-preview-clear"
                                                    style="display:none;">
                                                <span class="fas"></span> Borrar
                                            </button>
                                            <!-- image-preview-input -->
                                            <div class="btn btn-default image-preview-input" style="text-align: center">
                                                <span class="fas "></span>
                                                <span class="image-preview-input-title">Seleccionar</span>
                                                <input class="form-control" type="file"
                                                       accept="image/png, image/jpeg, image/gif"
                                                       name="foto"/>

                                                <!-- rename it -->
                                            </div>
                                        </div><!-- /input-group image-preview [TO HERE]-->
                                    </div>
                                    <button  type="submit" class="btn btn-primary mr-3" style="margin-left: 90%;margin-bottom: 7%">
                                        {{ __('Guardar') }}
                                    </button>
                                </div>
</div> <!---- Boton para crear un nuevo tipo de categoria- -->

                            </form>
                            <hr>
                            <br>
                        </div>
                    </div>
                </div>
    </div>
@endsection

