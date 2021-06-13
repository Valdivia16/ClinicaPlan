@extends("layouts.inicio")
@section("titulo")
    <h1>Clínica Médica Plasencia</h1>
@endsection
@section("contenido")

    <div class="limiter">
        <div class="container-login100" style="background-image: url('imagen/Login.png');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <div class="col-xl-12">
                    <div class="cat__pages__login__block__promo text-white text-center"></div>
                    <div class="cat__pages__login__block__inner">
                        <div class="cat__pages__login__block__form">
                                <div class="form-actions">
                                    <a
                                        type="submit"  href="{{route('login.index')}}" class="btn btn-primary mr-3" name="login"
                                        value="login">Iniciar Sesión
                                    </a>
                                    <br>
                                    <br>
                                    @if (Route::has('password.request'))
                                        <a style="font-weight: bold" class="btn btn-link" href="{{ route('registro.crear')}}">
                                            {{ __('¿No te has registrado?') }}
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
