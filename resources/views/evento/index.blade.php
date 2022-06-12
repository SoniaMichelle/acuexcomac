@extends('layouts.app')
@section('titulo', 'Eventos')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('libreria/lib/main.min.css') }}">
@endsection
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Eventos</h1>
        <ul class="breadcrumbs">
            <li><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="divider">/</li>
            <li><a href="#" class="active">Eventos</a></li>
        </ul>
        <div class="p-5 bg-white rouded shadow-lg " style="border-radius: 10px">
            <div class="container mt-5">
                <div id="agenda"></div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Datos del Evento</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action=""  id="formEventos">
                                {{-- 9. Obtencion de datos con el token --}}
                                {!! csrf_field() !!}
                                <div class="form-group d-none">
                                    <label for="id">ID:</label>
                                    <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId"
                                        placeholder="">
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="form-group">
                                    <label for="title">Titulo</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                                </div>
                                <div class="form-group">
                                    <label for="descripcion">Descripcion</label>
                                    <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="costo_event">Costo</label>
                                    <input type="text" class="form-control" name="costo_event" id="costo_event"
                                        aria-describedby="helpId" placeholder="Costo">
                                </div>
                                <div class="form-group">
                                    <label for="start">Start</label>
                                    <input type="date" class="form-control" name="start" id="start"
                                        aria-describedby="helpId" placeholder="">
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="form-group">
                                    <label for="end">end</label>
                                    <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId"
                                        placeholder="">
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="form-group">
                                    <label for="color">end</label>
                                    <input type="color" class="form-control" name="color" id="color" aria-describedby="helpId"
                                        placeholder="">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="btnGuardar">Guarar</button>
                            <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                            <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
@section('js')
    <script src="{{ asset('//cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    {{-- LIBRERIA FULLCALENDAR --}}
    <script src="{{ asset('libreria/lib/main.js') }}"></script>
    <script src="{{ asset('libreria/lib/locales-all.js') }}"></script>
    <script src="{{ asset('js/axios.min.js')}}"></script>
    <script src="{{ asset('js/eventos.js') }}" defer></script>
    <script src="{{ asset('js/validacion.js') }}"></script>
    {{-- 25. URL GENERAL --}}
    <script type="text/javascript">
        var baseURL = {!! json_encode(url('/')) !!} /* -> NOS DA LA URLD */
    </script>
    
@endsection
