@extends('layouts.app')
@section('titulo', 'Pagos de Nomina')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/evento.css') }}">
@endsection
@section('contentenido')
    <!-- MAIN -->
    <main>
        <div class="evento">
            <div class="content-data">
                <div class="head">
                    <h2>Registro Pago Nomina</h2>
                </div>
                <div class="chart">
                    <form action="{{ route('nomina.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name_docente">Nombre Docente</label>
                            <input type="text" class="form-control" id="name_docente"
                            name="name_docente" placeholder="Nombre Docente"
                            value="{{ old('name_docente') }}">
                           {{--  <select name="docente_id" id="docente_id" class="form-control">
                                <option selected value="0">Seleccione un docente</option>
                                @foreach ($pnominas as $pnomina)
                                    <option value="{{ $pnomina->id }}"> {{ $pnomina->nombre_docente }}</option>
                                @endforeach
                            </select> --}}
                        </div>
                        <div class="form-group">
                            <label for="fecha_nomina">Fecha</label>
                            <input type="date" class="form-control" id="fecha_nomina"
                                name="fecha_nomina" placeholder="Fecha del pago"
                                value="{{ old('fecha_nomina') }}">
                            <div id="alerta1"></div>
                        </div>
                        <div class="form-group">
                            <label for="cantidad_nomina">Cantidad</label>
                            <input type="text" class="form-control" id="cantidad_nomina"
                                name="cantidad_nomina" placeholder="00.00"
                                value="{{ old('cantidad_nomina') }}">
                            <div id="alerta2"></div>
                        </div>
                        <div class="row text-center mb-4 mt-5 boton">
                            <div class="col-md-12 ">
                                <button type="submit" onclick="return valPago();">Registrar</button>
                                <a href="{{ route("nomina.index")}}" class="btn btn-cancelar">Cancelar</a>
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
