@extends('layouts.app')
@section('titulo', 'Avances')
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Avances de Alumnos</h1>
        <ul class="breadcrumbs">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Lista Avances de Alumnos</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg mt-4" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Lista Alumnos</h3>
                    <div class="menu">
                        <a href="{{ route('expedientes.create') }}" style="text-decoration: none"><i class='bx bxs-folder-plus icon'></i></a>
                    </div>
                </div>
                {{-- Tabla para mstrar los registros de los avances --}}

                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Alumno</th>
                            <th>Archivo</th>
                            <th>Ver</th>
                            <th>Descargar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                            <tr>
                                <th scope="row">{{ $file->id }}</th>
                                <th value="{{ $file->id }}">{{ $file->alumno_id }}</th>
                                <th>{{ $file->files }}</th>
                                <td>
                                    <div class="but">
                                        <a target="_blank" class="btn btn-sm btn-outline-secondary"
                                            href="Archivos/{{ $file->files }}">Ver</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="but">
                                        <a class="btn btn-sm btn-outline-warning" href="Archivos/{{ $file->files }}"
                                            download="{{ $file->files }}">Descargar</a>
                                    </div>
                                </td>
                                <td>
                                    <form action="{{ route('expedientes.destroy', $file->id) }}" method="POST"
                                        class="form_eliminar_avance>
                                        @csrf
                                        @method('delete')
                                        <div class="
                                        but">
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
            </div>
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

    @if (session('avances') == 'exit')
        <script>
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    @endif
@endsection
