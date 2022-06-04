@extends('layouts.app')
@section('titulo', 'Nomina')
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Pagos Nomina</h1>
        <ul class="breadcrumbs">
            <li><a href="#">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Pagos nomina</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg" style="border-radius: 10px">
            <div class="content-data">
                <div class="head">
                    <h3>Todos los pagos</h3>
                    <div class="menu">
                        <a href="{{ route('nomina.create') }}"><i class='bx bxs-add-to-queue icon'></i></a>
                    </div>
                </div>
                {{-- CONTACTOS --}}

                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Docente</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nomina as $nominas)
                            <tr>
                                <td scope="row">{{ $nominas->id }}</td>
                                <td>{{ $nominas->docente_id }}</td>
                                <td>{{ $nominas->fecha_nomina }}</td>
                                <td>$ {{ $nominas->cantidad_nomina }}</td>
                                <td>
                                    {{-- Editar --}}
                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal"
                                        data-target="#editar{{ $nominas->id }}"><i class='bx bxs-edit-alt'></i>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="editar{{ $nominas->id }}" tabindex="-1" role="dialog"
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
                                                    <form action="{{ route('nomina.update', $nominas) }}" method="POST">
                                                        @csrf
                                                        @method('put')
                                                        <div class="form-group">
                                                            <label for="docente">Nombre del Docente</label>
                                                            <input type="text" class="form-control" id="docente"
                                                                name="docente" aria-describedby="emailHelp"
                                                                placeholder="Nombre del Docente"
                                                                value="{{ old('docente', $nominas->docente_id) }}">
                                                            <div id="alerta"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fecha_nomina">Fecha</label>
                                                            <input type="date" class="form-control" id="fecha_nomina"
                                                                name="fecha_nomina" placeholder="Fecha del pago"
                                                                value="{{ old('fecha_nomina', $nominas->fecha_nomina) }}">
                                                            <div id="alerta1"></div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cantidad_nomina">Cantidad</label>
                                                            <input type="text" class="form-control" id="cantidad_nomina"
                                                                name="cantidad_nomina" placeholder="00.00"
                                                                value="{{ old('cantidad_nomina', $nominas->cantidad_nomina) }}">
                                                            <div id="alerta2"></div>
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
                                    <form action="{{ route('nomina.destroy', $nominas) }}" method="POST"
                                        class="form_eliminar_nomina">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class='bx bxs-trash'></i>
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
