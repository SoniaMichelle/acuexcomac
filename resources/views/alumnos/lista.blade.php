@extends('layouts.app')
@section('titulo', 'Alumnos')
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Alumnos</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Lista Alumnos</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg mt-4" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Lista Alumnos</h3>
                    <div class="menu">
                        <a href="{{ route('alumnos.create') }}" style="text-decoration: none"><i
                                class='bx bxs-user-plus icon'></i></a>
                    </div>
                </div>
                {{-- CONTACTOS --}}


                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listas as $lista)
                            <tr>
                                <td scope="row">{{ $lista->id }}</td>
                                <td value="{{ $lista->id }}">{{ $lista->nombre_alumno }}</td>
                                <td>{{ $lista->ap_paterno_alumno }}</td>
                                <td>{{ $lista->ap_materno_alumno }}</td>
                                <td>
                                    <form action="" method="POST" class="form_eliminar_alumno">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="b3 icono3">
                                            <i class='bx bxs-user-x'></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
