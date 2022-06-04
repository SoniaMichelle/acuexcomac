@extends('layouts.app')
@section('titulo', 'Alumnos')
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
                    <h3>Todos los cursos</h3>
                    <div class="menu">
                        <a href="{{ route('cursos.create') }}"><i class='bx bxs-add-to-queue icon'></i></a>
                    </div>
                </div>
                {{-- CONTACTOS --}}

                <div class="table-responsive">
                    <table id="example" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($curso as $cursos)
                                <tr>
                                    <td scope="row">{{ $cursos->id }}</td>
                                    <td>{{ $cursos->nombre_curso }}</td>
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
    <script src="{{ asset('js/validacionForm.js') }}"></script>
    <script src="{{ asset('js/validacion.js') }}"></script>
    {{-- VALIDACION ELIMINAR --}}
    @if (session('destroy') == 'exit')
        <script>
            Swal.fire(
                'Eliminado!',
                'El pago ha sido eliminado.',
                'success'
            )
        </script>
    @endif
@endsection
