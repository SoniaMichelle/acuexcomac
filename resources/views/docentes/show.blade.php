@extends('layouts.plantilla')
@section('title', 'Editar Docente')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection
@section('contenido')
    <section class="formulario">
        <div class="contentBx mt-5 pt-4">
            <div class="row no-gutters formBx">
                <div class="col px-5">
                    <a href=""> <span type="button" class="btn close d-flex justify-content-end"><i
                                class="uil uil-times"></i></span>
                    </a>
                    <h2 class="font-weight-bold text-center">Registro Docente</h2>

                    <div class="p-5 bg-white rouded shadow-lg">
                        <form>
                            <h4 class="mt-4">Datos del Docente</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_docente">Nombre(s)</label>
                                    <span for="nombre_docente" class="form-control" id="nombre_docente" name="nombre_docente">{{ $docente->nombre_docente }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_paterno_docente">Apellido Paterno</label>
                                    <span class="form-control" id="ap_paterno_docente" name="ap_paterno_docente">{{ $docente->ap_paterno_docente}}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_materno_docente">Apellido Materno</label>
                                    <span class="form-control" id="ap_materno_docente" name="ap_materno_docente">{{ $docente->ap_materno_docente}}</span>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="sexo_docente">Genero</label>
                                    <span class="form-control" id="sexo_docente" name="sexo_docente">{{ $docente->sexo_docente}}</span>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edad_docente">Edad</label>
                                    <span class="form-control" id="edad_docente" name="edad_docente">{{ $docente->edad_docente}}</span>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="curp_docente">CURP)</label>
                                    <span class="form-control" id="curp_docente" name="curp_docente">{{ $docente->curp_docente}}</span>

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="rfc_docente">RFC</label>
                                    <span class="form-control" id="rfc_docente" name="rfc_docente">{{ $docente->rfc_docente}}</span>

                                </div>
                            </div>
                            <h4 class="mt-4">Datos de Contacto</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="email_docente">Email</label>
                                    <span class="form-control" id="email_docente" name="email_docente">{{ $docente->email_docente}}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tel_casa_docente">Telefono de casa</label>
                                    <span class="form-control" id="tel_casa_docente" name="tel_casa_docente">{{ $docente->tel_casa_docente}}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cel_docente">Telefono celular</label>
                                    <span type="text" class="form-control" id="cel_docente" name="cel_docente">{{ $docente->cel_docente}}</span>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ciudad_docente">Ciudad</label>
                                    <span class="form-control" id="ciudad_docente" name="ciudad_docente">{{ $docente->ciudad_docente}}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alcaldia_docente">Alcaldia</label>
                                    <span class="form-control" id="alcaldia_docente" name="alcaldia_docente">{{ $docente->alcaldia_docente}}</span>
    
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="colonia_docente">Colonia</label>
                                    <span class="form-control" id="colonia_docente" name="colonia_docente">{{ $docente->colonia_docente}}</span>
    
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="calle_docente">Calle y número</label>
                                    <span  class="form-control" id="calle_docente" name="calle_docente">{{ $docente->calle_docente}}</span>
    
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cp_docente">Código Postal</label>
                                    <span class="form-control" id="cp_docente" name="cp_docente">{{ $docente->cp_docente}}</span>
    
                                </div>
                            </div>
                            <h4 class="mt-4">Escolaridad</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cedula_docente">Cedula</label>
                                    <span class="form-control" id="cedula_docente" name="cedula_docente">{{ $docente->cedula_docente}}</span>
        
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="especialidad">Especialidad</label>
                                    <span class="form-control" id="especialidad" name="especialidad">{{ $docente->especialidad}}</span>
        
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="profesion">Profesion</label>
                                    <span class="form-control" id="profesion" name="profesion">{{ $docente->profesion}}</span>
        
                                </div>
                            </div>
                        </form>
                        <div class="row text-center mb-4 mt-5 boton">
                            <div class="col-md-12 ">
                                <a href="{{ route("docentes.index")}}" class="btn btn-cancelar">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- VALIDACION REGISTRO --}}
    <script src="{{ asset('js/validacionForm.js') }}"></script>
@endsection
