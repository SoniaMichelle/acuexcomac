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
                                    <label for="ciudad_alumno">Ciudad</label>
                                    <span type="text" class="form-control" id="ciudad_alumno"
                                        name="ciudad_alumno">{{ $alumno->ciudad_alumno }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alcaldia_alumno">Alcaldia</label>
                                    <span class="form-control" id="alcaldia_alumno"
                                        name="alcaldia_alumno">{{ $alumno->alcaldia_alumno }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="colonia_alumno">Colonia</label>
                                    <span class="form-control" id="colonia_alumno"
                                        name="colonia_alumno">{{ $alumno->colonia_alumno }}</span>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="calle_alumno">Calle y Numero</label>
                                    <span class="form-control" id="calle_alumno"
                                        name="calle_alumno">{{ $alumno->calle_alumno }}</span>

                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cp_alumno">CP</label>
                                    <span class="form-control" id="cp_alumno"
                                        name="cp_alumno">{{ $alumno->cp_alumno }}</span>
                                </div>
                            </div>
                            <h4 class="mt-4">Escolaridad</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_curso">Curso</label>
                                    <span class="form-control" id="nombre_curso"
                                        name="nombre_curso">{{ $alumno->nombre_curso }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="grado_id">Grado</label>
                                    <span class="form-control" id="grado_id"
                                        name="grado_id">{{ $alumno->grado_id }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ciclo_escolar">Ciclo Escolar</label>
                                    <span class="form-control" id="ciclo_escolar"
                                        name="ciclo_escolar">{{ $alumno->ciclo_escolar }}</span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="fecha_ingreso">Año de Inicio</label>
                                    <span class="form-control" id="fecha_ingreso"
                                        name="fecha_ingreso">{{ $alumno->fecha_ingreso }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="asignatura">Año de Fin de Curso</label>
                                    <span class="form-control" id="fecha_baja"
                                        name="fecha_baja">{{ $alumno->fecha_baja }}</span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estatus">Status</label>
                                    <span class="form-control" id="estatu"
                                        name="estatu">{{ $alumno->estatus }}</span>
                                    <div id="alerta17"></div>
                                </div>
                            </div>
                        </form>
                        <div class="row text-center mb-4 mt-5 boton">
                            <div class="col-md-12 ">
                                <a href="{{ route('alumnos.index') }}" class="btn btn-cancelar">Cancelar</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
