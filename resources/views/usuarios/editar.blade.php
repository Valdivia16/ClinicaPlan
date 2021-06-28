@extends('layouts.plantilla')
@section("tituloenca")
    <h2>Clínica Medica Plasencia</h2>
@endsection
@section('contenido')
    <div class="card bigicon">
        <div class="align-content-center">
            <link rel="stylesheet" href="/assets/css/tooplate-style.css">
            <br>
            <div class="cat__pages__login__block__inner1 ">
                <h4 class="text-uppercase header" >
                    <strong>Registro Empleado</strong>
                </h4>
                <br>
                <hr>
                <div class="cat__pages__login__block__form " style="margin-left: 20%">
                    <form action="{{ route('usuario.update',['id'=>$user->id])}}" method="post" enctype="multipart/from-data">
                        @csrf()
                        <div class="form-group">
                            <label>Ingrese el nombre:</label>
                            <div class="col-md-10">
                                <input
                                    type="text"
                                    pattern="[A-Za-z ]{2,20}"
                                    required
                                    @if(old("name"))
                                    value="{{old("name")}}"
                                    @else
                                    value="{{$user->name}}"
                                    @endif
                                    name="name"
                                    class="form-control  @error('name') is-invalid @enderror">
                                <small class="text-muted">Maxima longitud 100 caracteres</small>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ingrese el numero de Email:</label>
                            <div class="col-md-10">
                                <input type="email" maxlength="80"
                                       required
                                       @if(old("email"))
                                       value="{{old("email")}}"
                                       @else
                                       value="{{$user-> email}}"
                                       @endif
                                       name="email"
                                       class="form-control  @error('email') is-invalid @enderror">
                                <small class="text-muted">Maxima longitud 80 caracteres</small>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="text-align: justify">{{ __('Cargo') }}</label>
                            <div class="col-md-10">
                                <select name="rol"
                                        @if(old("rol"))
                                        value="{{old("rol")}}"
                                        @else
                                        value="{{$user->rol}}"
                                        @endif
                                        required="required"
                                        class="col-md-10 form-select  @error('rol') is-invalid @enderror" id="rol">
                                    <option disabled selected value="{{$user->rol}}">Seleccione su cargo</option>
                                    @foreach($roles as $rol)
                                        <option value="{{$rol->id}}">{{$rol->rol}}</option>
                                    @endforeach
                                    @error('rol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </select>

                                <!-- Para ingresar una imagen -->
                                <div class="from-group">

                                    <div class="col-12 card">
                                        <div class="form-group card-body">
                                            <label>Seleccione una imagen (opcional):</label>
                                            <input class="form-control  @error('imagen_url') is-invalid @enderror"
                                                   accept="image/*"
                                                   name="imagen_url"
                                                   onchange="verImagen(event)"
                                                   type="file" placeholder="Ingrese una imagen"
                                            >
                                            <small class="text-muted">Solo formatos en imagen (.png,.jpg,.jpeg)</small>
                                            @error('imagen')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
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

