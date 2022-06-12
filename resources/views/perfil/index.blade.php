@extends('layouts.app')
@section('titulo', 'Perfil')
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Perdil</h1>
        <ul class="breadcrumbs">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Perdil</a></li>
        </ul>
        <div class="data">
            <div class="content-data">
                <div class="head">
                    <h3>Editar Perfil</h3>
                </div>
                {{-- CONTACTOS --}}
                <div class="chart">
                    <div id="chart">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form action="{{ route('changePassword') }}" method="POST" class="needs-validation"
                                    novalidate>
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="form-group mt-3">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}"
                                                class="form-control @error('email') is-invalid @enderror">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="form-group mt-3">
                                            <label for="password_actual">Contraseña Actual</label>
                                            <input type="password" name="password_actual"
                                                class="form-control @error('password_actual') is-invalid @enderror"
                                                required>
                                            @error('password_actual')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="form-group mt-3">
                                            <label for="new_password ">Nueva Contraseña</label>
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror" required>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="form-group mt-3">
                                            <label for="confirm_password">Confirmar nueva Contraseña</label>
                                            <input type="password" name="confirm_password"
                                                class="form-control @error('confirm_password') is-invalid @enderror"
                                                required>
                                            @error('confirm_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row text-center mb-4 mt-5 boton">
                                        <div class="col-md-12 ">
                                            <button type="submit" id="formSubmit">Guardar Cambios</button>
                                            <a href="{{ route('home') }}" class="btn btn-cancelar">Cancelar</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
@section('js')
    <script src="js/datatable.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- VALIDACION NUEVA PASSWORD --}}
    @if (session('nuevo') == 'ok')
        <script>
            Swal.fire(
                'Exito!',
                'La contraseña se cambio.',
                'success'
            )
        </script>
    @endif
    @if (session('menor') == 'limite')
        <script>
            Swal.fire(
                'Eyy!',
                'La contraseña deve ser mayor a 6.',
                'warning'
            )
        </script>
    @endif
    @if (session('claveIncorrecta') == 'mal')
        <script>
            Swal.fire(
                'Oops!',
                'Por favor verifique las contraseña no coinciden.',
                'error'
            )
        </script>
    @endif
    @if (session('claveIncorrecta') == 'mal')
        <script>
            Swal.fire(
                'Oops!',
                'Por favor verifique las contraseña no coinciden.',
                'error'
            )
        </script>
    @endif
    @if (session('name') == 'ok')
        <script>
            Swal.fire(
                'Exito!',
                'El nombre fue cambiado correctamente!.',
                'success'
            )
        </script>
    @endif
@endsection
