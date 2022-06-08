@extends('layouts.app')
@section('titulo', 'Grados')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/evento.css') }}">
@endsection
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Grados</h1>
        <ul class="breadcrumbs">
            <li><a href="{{route('home')}}">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Grados</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Todos los Grados</h3>
                    <div class="col d-flex justify-content-end">
                        <div class="menu">
                            <a href="{{ route('grados.create') }}" style="text-decoration: none"><i class='bx bxs-message-square-add icon'></i></a>
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
                           
                            <div class="col d-flex">
                                <div class="col">
                                    <a href="" class="btn edit"><i class='bx bxs-edit-alt icon'></i></a>
                                </div>
                                <form action="{{ route('grados.destroy', $grado) }}" method="POST"
                                    class="form_eliminar_alumno">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn eliminar" >
                                        <i class='bx bxs-trash icon'></i>
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
