@extends('layouts.inicio')

@section('contenido')
<div class="limiter">
    <div class="wrap-login100 p-t-30 p-b-50">
        <div class="col-xl-12">
            <div class="cat__pages__login__block__promo text-white text-center">
                    <div class="cat__pages__login__block__inner1">
                        <h4 class="text-uppercase" >
                            <strong>Registro</strong>
                        </h4>
                        <br>
                <div class="cat__pages__login__block__form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label " style="text-align: justify">{{ __('Nombre') }}

                            </label>

                            <div class="col-md-6">
                                <input placeholder="Ingrese el nombre" id="name" type="text"  maxlength="255"  class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="text-align: justify">{{ __('Correo Eléctronico') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Ingrese el correo eléctronico" maxlength="255" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="text-align: justify">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Ingrese la contraseña" id="password" minlength="8" maxlength="25" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"  style="text-align: justify">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input placeholder="Confirme su contraseña" maxlength="25" minlength="8" id="password-confirm" type="password" class="form-control" name="password_confirmation" style="text-align: justify" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="text-align: justify">{{ __('Cargo') }}</label>
                            <div class="col-md-6">
                            <select name="rol"
                                required="required"

                                class="disponible form-control @error('disponible') is-invalid @enderror" id="disponible">
                                <option disabled selected value="s">Seleccione su cargo</option>
                                @foreach($roles as $rol)
                                    <option value="{{$rol->id}}">{{$rol->rol}}</option>
                                    @endforeach
                            </select>
                                <br>

                                <button type="submit" class="btn btn-primary mr-3" style="text-align:center">
                                    {{ __('Guardar') }}
                                </button>
                            </div>
                            <!---- Boton para crear un nuevo tipo de categoria- -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
