@extends('layouts.app')
@section('titulo', 'Docentes')
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Docentes</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Docentes</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Todos los Docentes</h3>
                    <div class="menu">
                        <a href="{{ route('docentes.create') }}" style="text-decoration: none"> <i class='bx bxs-user-plus icon'></i></a>
                    </div>
                </div>
                {{-- Tabla donde se mostraran todos los registros realizados --}}
                    <table id="example"  class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Asignatura</th>
                                <th>Mostrar</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($docentes as $docente)
                                <tr>
                                    <td scope="row">{{ $docente->id }}</td>
                                    <td values="{{$docente->id}}"> {{ $docente->nombre_docente }}</td>
                                    <td>{{ $docente->ap_paterno_docente }}</td>
                                    <td>{{ $docente->asignatura }} </td>
                                    <td>
                                        <a class="btn btn-outline-warning" href="{{ route('docentes.show', $docente->id) }}"><i class='bx bxs-user-detail'></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-outline-success" href="{{ route('docentes.editar', $docente->id) }}"><i class='bx bxs-edit-alt'></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('docentes.destroy', $docente) }}" method="POST"
                                            class="form_eliminar_doc">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger">
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
        </div>
    </main>
    <!-- MAIN -->
@endsection
@section('js')
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/validacion.js') }}"></script>
    {{-- VALIDACION ELIMINAR --}}
    @if (session('destroy') == 'exit')
        <script>
            Swal.fire(
                'Eliminado!',
                'El docente ha sido eliminado.',
                'success'
            )
        </script>
    @endif
@endsection
