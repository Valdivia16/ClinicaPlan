@extends('layouts.plantilla')
@section("tituloenca")
    <h2>Clínica Medica Plasencia</h2>
@endsection
@section('contenido')
    <div class="card bigicon">
        <div class="align-content-center">
            <link rel="stylesheet" href="assets/css/tooplate-style.css">
            <br>
            <div class="cat__pages__login__block__inner1 ">
                <h4 class="text-uppercase header" >
                    <strong>Registro Empleado</strong>
                </h4>
                <br>
                <hr>
                <div class="cat__pages__login__block__form " style="margin-left: 20%">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">

                            <label for="name" class="col-md-4 col-form-label " style="text-align:
                            justify">{{ __('Nombre') }}
                            </label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="text-align: justify">{{ __('Correo Eléctronico') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="text-align: justify">{{ __('Contraseña') }}</label>

                            <div class="col-md-10">
                                <input placeholder="Ingrese la contraseña" id="password" minlength="8" maxlength="25" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"  style="text-align: justify">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-10">
                                <input placeholder="Confirme su contraseña" maxlength="25" minlength="8" id="password-confirm" type="password" class="form-control" name="password_confirmation" style="text-align: justify" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="text-align: justify">{{ __('Cargo') }}</label>
                            <div class="col-md-10">
                                <select name="rol"
                                        required="required"
                                        class="col-md-10 form-select  @error('rol') is-invalid @enderror" id="rol">
                                    <option disabled selected value="s">Seleccione su cargo</option>
                                    @foreach($roles as $rol)
                                        <option value="{{$rol->id}}">{{$rol->rol}}</option>
                                    @endforeach
                                    @error('rol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>
                                <div class="form-group">
                                    <label>Seleccione una imagen (opcional):</label>
                                    <input class="form-control  @error('foto') is-invalid @enderror"
                                           accept="image/*"
                                           name="imagen_url"
                                           type="file" placeholder="Ingrese una imagen"
                                    >
                                    <small class="text-muted">Solo formatos en imagen (.png,.jpg,.jpeg)</small>
                                    @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <br>
                                <button  type="submit" class="btn btn-primary mr-3" style="margin-left: 90%;margin-bottom: 5%">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                            <!---- Boton para crear un nuevo tipo de categoria- -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
