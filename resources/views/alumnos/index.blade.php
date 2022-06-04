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
                            <th>Apellido</th>
                            <th>Status</th>
                            <th>Mostrar</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                            <tr>
                                <td scope="row">{{ $alumno->id }}</td>
                                <td>{{ $alumno->nombre_alumno }}</td>
                                <td>{{ $alumno->ap_paterno_alumno }}</td>
                                <td>{{ $alumno->estatus }}
                                    {{-- @if ($alumno->estatus == 1)
                                            <span class="btn-sm btn-succes">Activo</span>
                                        @else
                                            <span class="btn-sm btn-danger">Inactivo</span>
                                        @endif --}}

                                </td>
                                <td>
                                    <a href="{{ route('alumnos.show', $alumno->id) }}"><button type="button"
                                            class="b1 icono1"><i class='bx bxs-user-detail'></i></button>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('alumnos.editar', $alumno->id) }}"><button type="button"
                                            class="b2 icono2"><i class='bx bxs-edit-alt'></i></button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST"
                                        class="form_eliminar_alumno">
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
