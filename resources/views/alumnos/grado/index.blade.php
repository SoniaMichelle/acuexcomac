@extends('layouts.app')
@section('titulo', 'Alumnos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/evento.css') }}">
@endsection
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Cursos</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Cursos</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Todos los Docentes</h3>
                    <div class="col d-flex justify-content-end">
                        <div class="menu">
                            <a href="{{ route('grados.create') }}" style="text-decoration: none"> <i
                                    class='bx bxs-user-plus icon'></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    @foreach ($grados as $grado)
                        <div class="card mb-3 box" style="max-width: 18rem;">
                            <div class="head bg-transparent">
                                <a href="{{ route('alumnos.lista', $grado->id) }}">
                                    <h1 class="text">{{ $grado->nombre_grado }}</h1>
                                </a>
                            </div>
                            <div class="col text-center">
                                <form action="{{ route('grados.destroy', $grado) }}" method="POST"
                                    class="form_eliminar_alumno">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger" >
                                        <i class='bx bxs-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
@section('js')
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/validacion.js') }}"></script>
    <script src="{{ asset('js/validacion.js') }}"></script>
    {{-- VALIDACION ELIMINAR --}}
    @if (session('destroy') == 'exit')
        <script>
            Swal.fire(
                'Eliminado!',
                'El grado se ha eliminado',
                'success'
            )
        </script>
    @endif
@endsection
