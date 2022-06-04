@extends('layouts.app')
@section('titulo', 'Pagos de Alumnos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/evento.css') }}">
@endsection
@section('contentenido')
    <!-- MAIN -->
    <main>
        <div class="evento">
            <div class="content-data">
                <div class="head">
                    <h2>Nuevo Evento</h2>
                </div>
                <div class="chart">
                    <form action="{{ route('grados.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre_grado">Nombre del Curso</label>
                            <input type="text" class="form-control" id="nombre_grado" name="nombre_grado"
                                placeholder="Nombre del curso" value="{{ old('nombre_cursos') }}">
                        </div>
                        <div class="row text-center mb-4 mt-5 boton">
                            <div class="col-md-12 ">
                                <button type="submit">Registrar</button>
                                <a href="{{ route("grados.index")}}" class="btn btn-cancelar">Cancelar</a>
                            </div>
                        </div>
                    </form>
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
