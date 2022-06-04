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
                    <form method="POST" action="{{ route('expedientes.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="my-1 mr-2" for="alumno_id">Nombre del Alumno</label>
                            <select class="custom-select my-1 mr-sm-2" id="alumno_id" name="alumno_id">
                                <option selected>Seleccione un alumno</option>
                                @foreach ($nombres as $nombre)
                                    <option value="{{ $nombre->id }}"> {{ $nombre->nombre_alumno }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    {{-- <label for="exampleFormControlFile1">Example file input</label> --}}
                                    <input type="file" name="files" class="form-control-file">
                                </div>
                            </div>
                        </div>
                        <div class="row text-center mb-4 mt-5 boton">
                            <div class="col-md-12 ">
                                <button type="submit">Registrar</button>
                                <a href="{{ route("expedientes.index")}}" class="btn btn-cancelar">Cancelar</a>
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
