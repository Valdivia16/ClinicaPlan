@extends("layouts.inicio")
@section("titulo")
    <h1>Clínica Medica Plasencia</h1>
    <h3>Clasificadora y exportadora de tabaco S.A </h3>
@endsection
@section("contenido")

    <div class="limiter">
        <div class="container-login100" style="background-image: url('imagen/Login.png');">
            <div class="wrap-login100 p-t-30 p-b-50"><br><br>

                <div class="col-xl-12">
                    <div class="cat__pages__login__block__promo text-white text-center"></div>
                    <div class="cat__pages__login__block__inner">
                        <div class="cat__pages__login__block__form">
                            <h4 class="text-uppercase">
                                <strong>Iniciar Sesión</strong>
                            </h4>
                            <br />
                            <form method="POST" action="{{ route('login') }}" id="form-validation" name="form-validation">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label">Correo Eléctronico</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                           placeholder="Correo eléctronico"
                                           data-validation="[NOTEMPTY]">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Contraseña</label>
                                    <input id="password"  type="password" class="form-control  @error('password')is-invalid @enderror" name="password" required autocomplete="current-password"
                                           data-validation-message="Introduzca la contraseña"
                                           placeholder="Contraseña">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label>
                                            Recuérdame

                                        </label>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button
                                        type="submit" class="btn btn-primary mr-3" name="login"
                                        value="login">Iniciar Sesión
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('recuperar') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
