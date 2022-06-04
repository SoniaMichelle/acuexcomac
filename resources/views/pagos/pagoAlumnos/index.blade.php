@extends('layouts.app')
@section('titulo', 'Pagos de Alumnos')
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Pagos Alumnos</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Pagos alumnos</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Todos los pagos</h3>
                    <div class="menu">
                        <a href="{{ route('pago.create') }}"> <i class='bx bxs-add-to-queue icon'></i></a>
                    </div>
                </div>
                {{-- LISTA DE PAGOS --}}
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Concepto</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pago as $pagos)
                            <tr>
                                <td scope="row">{{ $pagos->alumno_id }}</td>
                                <td> {{ $pagos->nombre_alumno }} </td>
                                <td>{{ $pagos->concepto_alum }}</td>
                                <td>$ {{ $pagos->cantidad_alum }}</td>
                                <td>{{ $pagos->fecha_alum }}</td>

                                <td>
                                    {{-- Editar --}}
                                    <button type="button" class="btn b2 icono2" data-toggle="modal"
                                        data-target="#editar{{ $pagos->id }}"><i class='bx bxs-edit-alt'></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editar{{ $pagos->id }}" tabindex="-1" role="dialog"
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
                                                    <form action="{{ route('pago.update', $pagos) }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="alum">Nombre del Docente</label>
                                                            <input type="text" class="form-control" id="alum" name="alum"
                                                                aria-describedby="emailHelp" placeholder="Nombre del Alumno"
                                                                value="{{ old('alum', $pagos->alum) }}">
                                                            <div id="alerta"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="concepto_alum">Nombre del Docente</label>
                                                            <input type="text" class="form-control" id="concepto_alum"
                                                                name="concepto_alum" aria-describedby="emailHelp"
                                                                placeholder="Concepto"
                                                                value="{{ old('concepto_alum', $pagos->concepto_alum) }}">
                                                            <div id="alerta1"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cantidad_alum">Cantidad</label>
                                                            <input type="text" class="form-control" id="cantidad_alum"
                                                                name="cantidad_alum" placeholder="00.00"
                                                                value="{{ old('cantidad_alum', $pagos->cantidad_alum) }}">
                                                            <div id="alerta2"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fecha_alum">Fecha</label>
                                                            <input type="date" class="form-control" id="fecha_alum"
                                                                name="fecha_alum" placeholder="Fecha del pago"
                                                                value="{{ old('fecha_alum', $pagos->fecha_alum) }}">
                                                            <div id="alerta3"></div>
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
                                <td>
                                    <form action="{{ route('pago.destroy', $pagos) }}" method="POST"
                                        class="form_eliminar_nomina">
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
