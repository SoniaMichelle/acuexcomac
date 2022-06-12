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
                    <form action="{{ route('pago.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="alumno_id">Alumno</label>
                            {{-- <select name="alumno_id" id="alumno_id" class="form-control">
                                <option selected>Seleccione un alumno</option>
                                @foreach ($palumnos as $palumno)
                                    <option value="{{ $palumno->id }}"> {{ $palumno->nombre_alumno }}</option>
                                @endforeach
                            </select> --}}
                            <input type="text" class="form-control" id="name_alumno" name="name_alumno"
                                placeholder="Nombre Alumno" value="{{ old('name_alumno') }}">
                        </div>
                        <div class="form-group">
                            <label for="concepto_alum">Concepto</label>
                            <input type="text" class="form-control" id="concepto_alum" name="concepto_alum"
                                placeholder="Concepto" value="{{ old('concepto_alum') }}">
                            <div id="alerta1"></div>
                        </div>
                        <div class="form-group">
                            <label for="cantidad_alum">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad_alum" name="cantidad_alum"
                                placeholder="00.00" value="{{ old('cantidad_alum') }}">
                            <div id="alerta2"></div>
                        </div>
                        <div class="form-group">
                            <label for="fecha_alum">Fecha</label>
                            <input type="date" class="form-control" id="fecha_alum" name="fecha_alum" placeholder="Fecha"
                                value="{{ old('fecha_alum') }}">
                            <div id="alerta3"></div>
                        </div>
                        <div class="row text-center mb-4 mt-5 boton">
                            <div class="col-md-12 ">
                                <button type="submit" onclick="return valPagoAlum();">Registrar</button>
                                <a href="{{ route('pago.index') }}" class="btn btn-cancelar">Cancelar</a>
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
