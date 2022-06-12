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
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Grados</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Todos los Grados</h3>
                    <div class="col d-flex justify-content-end">
                        <div class="menu">
                            <a href="{{ route('grados.create') }}" style="text-decoration: none"><i
                                    class='bx bxs-message-square-add icon'></i></a>
                        </div>
                    </div>
                </div>

                {{-- CONTACTOS --}}

                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>PDF</th>
                            <th>Modificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($grados as $grado)
                            <tr>
                                <td scope="row">{{ $grado->id }}</td>
                                <td>{{ $grado->nombre_grado }}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('alumnos.lista', $grado->id) }}">
                                        PDF
                                    </a>
                                </td>

                                <td>
                                    {{-- <a class="btn btn-outline-warning"
                                        href="{{ route('alumnos.editar', $alumno->id) }}"><i
                                            class='bx bxs-edit-alt'></i></button>
                                    </a> --}}
                                    {{-- Editar --}}
                                    <button type="button" class="btn btn-sm btn-outline-warning" data-toggle="modal"
                                        data-target="#editar{{ $grado->id }}"><i class='bx bxs-edit-alt'></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editar{{ $grado->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal
                                                        title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('grados.update', $grado) }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="nombre_grado">Nombre del Grado</label>
                                                            <input type="text" class="form-control" id="nombre_grado"
                                                                name="nombre_grado" aria-describedby="emailHelp"
                                                                placeholder="Nombre del Docente"
                                                                value="{{ old('nombre_grado', $grado->nombre_grado) }}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary"
                                                                id="btn_editar">Editar</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancelar</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- FIND EDIT --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- <div class="card-deck">
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
                </div> --}}
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
