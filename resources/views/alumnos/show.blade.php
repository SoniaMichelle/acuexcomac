@extends('layouts.plantilla')
@section('title', 'Datos del Alumno')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection
@section('contenido')
    <section class="mostrar">
        <div class="contentBx mt-5 pt-4">
            <div class="row no-gutters formBx">
                <div class="col px-5">
                    <a href=""> <span type="button" class="btn close d-flex justify-content-end"><i
                                class="uil uil-times"></i></span>
                    </a>
                    <h2 class="font-weight-bold text-center">Datos del Alumno</h2>
                    <div class="p-5 bg-white rouded shadow-lg">
                        <form>
                            <h4 class="mt-4">Datos del Alumno</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_alumno">Nombre(s)</label>
                                    <span class="form-control" id="nombre_alumno"
                                        name="nombre_alumno">{{ $alumno->nombre_alumno }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_paterno_alumno">Apellido Paterno</label>
                                    <span class="form-control" id="ap_paterno_alumno"
                                        name="ap_paterno_alumno">{{ $alumno->ap_paterno_alumno }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_materno_alumno">Apellido Materno</label>
                                    <span class="form-control" id="ap_materno_alumno"
                                        name="ap_materno_alumno">{{ $alumno->ap_materno_alumno }}</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="curp_alumno">CURP</label>
                                    <span class="form-control" id="curp_alumno"
                                        name="curp_alumno">{{ $alumno->curp_alumno }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sexo_alumno">Genero</label>
                                    <span class="form-control" id="sexo_alumno"
                                        name="sexo_alumno">{{ $alumno->sexo_alumno }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="edad_alumno">Edad</label>
                                    <span class="form-control" id="edad_alumno"
                                        name="edad_alumno">{{ $alumno->edad_alumno }}</span>

                                </div>
                            </div>
                            <h4 class="mt-4">Datos de Contacto</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_tutor">Tutor</label>
                                    <span class="form-control" id="nombre_tutor"
                                        name="nombre_tutor">{{ $alumno->nombre_tutor }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tel_casa">Numero de Casa</label>
                                    <span class="form-control" id="tel_casa"
                                        name="tel_casa">{{ $alumno->tel_casa }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cel_tutor">Telefono de celular</label>
                                    <span class="form-control" id="cel_tutor"
                                        name="cel_tutor">{{ $alumno->cel_tutor }}</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cel_docente">Ciudad</label>
                                    <span type="text" class="form-control" id="cel_docente"
                                        name="cel_docente">{{ $alumno->ciudad_alumno }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ciudad_docente">Alcaldia</label>
                                    <span class="form-control" id="ciudad_docente"
                                        name="ciudad_docente">{{ $alumno->alcaldia_alumno }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alcaldia_docente">Colonia</label>
                                    <span class="form-control" id="alcaldia_docente"
                                        name="alcaldia_docente">{{ $alumno->colonia_alumno }}</span>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="colonia_docente">Calle y Numero</label>
                                    <span class="form-control" id="colonia_docente"
                                        name="colonia_docente">{{ $alumno->calle_alumno }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="calle_docente">CP</label>
                                    <span class="form-control" id="calle_docente"
                                        name="calle_docente">{{ $alumno->cp_alumno }}</span>
                                </div>
                            </div>
                            <h4 class="mt-4">Escolaridad</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cp_docente">Curso</label>
                                    <span class="form-control" id="cp_docente"
                                        name="cp_docente">{{ $alumno->nombre_curso }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cedula_docente">Grado</label>
                                    <span class="form-control" id="cedula_docente"
                                        name="cedula_docente">{{ $alumno->grado_id }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="especialidad">Ciclo Escolar</label>
                                    <span class="form-control" id="especialidad"
                                        name="especialidad">{{ $alumno->ciclo_escolar }}</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="profesion">Año de Inicio</label>
                                    <span class="form-control" id="profesion"
                                        name="profesion">{{ $alumno->fecha_ingreso }}</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="asignatura">Año de Fin de Curso</label>
                                    <span class="form-control" id="asignatura"
                                        name="asignatura">{{ $alumno->fecha_baja }}</span>
                                </div>
                            </div>
                            <h4 class="mt-4">Documentacion</h4>
                            <div class="form-row mt-3">
                                <div class="form-group col">
                                    {{-- <span class="form-control btn-info" id="asignatura"
                                        name="asignatura">{{ $alumno->fileCurp }}</span> --}}
                                    <div class="but">
                                        <a target="blank_" class="form-control btn-info"
                                            href="documentos/{{ $alumno->fileCurp }}">{{ $alumno->fileCurp }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class=" modal-footer">
                            {{-- <button type="submit" class="btn btn-primary" id="btn_registrar_alumno">Registrar</button> --}}
                            <a href="{{ route('alumnos.index') }}"><button type="button" class="btn cerrar"
                                    data-dismiss="modal">Regresar</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
