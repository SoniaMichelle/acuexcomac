@extends('layouts.app')
@section('titulo', 'Iniciar Sesión')
@section('css')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@section('content')
    <div class="contenedor">
        <section class="grid">
            <div class="grid-texts">
                <div class="contentBx">
                    <div class="formBx">
                        <div class="col text-center">
                            <img src="{{ asset('img/logo.png') }}" style="width: 150px">
                        </div>
                        <h4 class="text-center">Iniciar Sesión</h4>
                        <div class="col-12 mt-3">
                            @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                   {{$error}}
                                  </div>
                                @endforeach
                            </ul>
                        @endif
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-field">
                                <input id="email" type="text" name="email" placeholder="Introduce tu correo electrónico"
                                    value="{{ old('email') }}" autocomplete="email" autofocus>
                                <i class='bx bx-envelope'></i>
                            </div>
                            <div id="alerta1"></div>
                            <div class="input-field">
                                <input id="password" type="password" name="password" class="password"
                                    placeholder="Ingresa tu contraseña" @error('password') is-invalid @enderror
                                    name="password" autocomplete="current-password">
                                <i class='bx bx-lock-alt icon-log'></i>
                                <i class='bx bx-low-vision showHidePw'></i>
                            </div>
                            <div id="alerta2"></div>
                            {{-- <div class="row mb-0">
                                @i
                                f (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div> --}}
                            <div class="input-field button">
                                <input type="submit" onclick="return valLogin();" value="Iniciar Sesión">
                            </div>
                            <div class="input-field button1">
                                <a href="{{ url('/salir') }}"><input value="Salir"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/validacion_login.js') }}"></script>
@endsection
