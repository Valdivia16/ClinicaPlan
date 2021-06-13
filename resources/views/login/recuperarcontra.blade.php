@extends("layouts.inicio")
@section("contenido")
    <div class="limiter">
        <div class="container-login100" style="background-image: url('imagen/Login.png');">
            <div class="wrap-login100 p-t-30 p-b-50"><br><br>

                <div class="col-xl-12">
                    <div class="cat__pages__login__block__promo text-white text-center"></div>
                    <div class="cat">

                        <div class="cat__pages__login__block__form">
                            <h4 class="text-uppercase">
                                <strong>Recuperar Contraseña</strong>
                            </h4>
                            <br />
                            <div >

                                <div class="form-group">
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <label  for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                                            <div class="col-md-6">
                                                <input placeholder="Ingrese el correo electrónico " id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                                <button type="submit"  class="btn btn-primary " >
                                                    {{ __('Enviar enlace de restablecimiento de contraseña') }}
                                                </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



