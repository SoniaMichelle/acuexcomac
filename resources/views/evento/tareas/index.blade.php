@extends('layouts.app')
@section('titulo', 'Alumnos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/evento.css') }}">

@endsection
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Notas</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Lista de Notas</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Todos los Docentes</h3>
                    <div class="col d-flex justify-content-end">
                        <div class="menu">
                            <a href="{{ route('nota.create') }}" style="text-decoration: none"> <i
                                    class='bx bxs-user-plus icon'></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-deck">
                    @foreach ($notas as $nota)
                        @if ($nota->completed == 0)
                            <div class="card mb-3 box" style="max-width: 18rem;">
                                <div class="head card-header bg-transparent border-secondary">
                                    <h5><a href="">{{ $nota->titulo_nota }}</a></h5>
                                    <div class="col d-flex justify-content-end">
                                        <div class="menu">
                                            <a href="" style="text-decoration: none"><i class='bx bxs-trash'></i></a>
                                        </div>
                                    </div>
                                </div>
                                </h5>
                                <div class="card-body text-dark">
                                    <p class="card-text">{{ $nota->body }}</p>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Completa
                                    </label>
                                </div>
                            </div>
                        @endif
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
@endsection
