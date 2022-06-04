@extends('layouts.plantilla')
@section('title', 'Registro Alumno')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
@endsection
@section('contenido')
    <section class="formulario">
        <div class="contentBx mt-5 pt-4">
            <div class="row no-gutters formBx">
                <div class="col px-5">
                    <a href=""> <span type="button" class="btn close d-flex justify-content-end"><i class="uil uil-times"></i></span></a>
                    <h2 class="font-weight-bold text-center">Registro Alumno</h2>
                    <div class="p-5 bg-white rouded shadow-lg mt-4">
                        {{-- INICIO FORMULARIO --}}
                        <form name="addForm" action="{{ route('alumnos.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <h4 class="mt-4">Datos del Alumno</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_alumno">Nombre(s)</label>
                                    <input type="text" class="form-control" id="nombre_alumno" name="nombre_alumno"
                                        placeholder="Nombre(s)" value="{{ old('nombre_alumno') }}">
                                    <div id="alerta"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_paterno_alumno">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="ap_paterno_alumno"
                                        name="ap_paterno_alumno" placeholder="Apellido Paterno"
                                        value="{{ old('ap_paterno_alumno') }}">
                                    <div id="alerta1"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_materno_alumno">Apellido Materno</label>
                                    <input type="text"
                                        class="form-control  @error('ap_materno_alumno') is-invalid @enderror"
                                        id="ap_materno_alumno" name="ap_materno_alumno" placeholder="Apellido Materno"
                                        value="{{ old('ap_materno_alumno') }}">
                                    <div id="alerta2"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="curp_alumno">CURP</label>
                                    <input type="text" class="form-control  @error('curp_alumno') is-invalid @enderror"
                                        id="curp_alumno" name="curp_alumno" placeholder="CURP"
                                        value="{{ old('curp_alumno') }}">
                                    <div id="alerta3"></div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 p-4 mt-2">
                                        <input type="file" name="fileCurp">
                                    </div>
                                </div>
                                <div class=" form-group col-md-6">
                                    <label for="sexo_alumno">Genero</label>
                                    <select id="sexo_alumno" name="sexo_alumno" class="form-control"
                                        value="{{ old('sexo_alumno') }}">
                                        <option selected>Seleccione un genero</option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edad_alumno">Edad</label>
                                    <input type="text" class="form-control  @error('edad_alumno') is-invalid @enderror"
                                        id="edad_alumno" name="edad_alumno" placeholder="Edad"
                                        value="{{ old('edad_alumno') }}">
                                    <div id="alerta4"></div>
                                </div>
                            </div>
                            <h4 class="mt-4">Datos de Contacto</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_tutor">Nombre del Padre o Tutor</label>
                                    <input type="text" class="form-control  @error('nombre_tutor') is-invalid @enderror"
                                        id="nombre_tutor" name="nombre_tutor" placeholder="Nombre del Padre o Tutor"
                                        value="{{ old('nombre_tutor') }}">
                                    <div id="alerta5"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tel_casa">Telefono de casa (10
                                        dígitos)</label>
                                    <input type="text" class="form-control  @error('tel_casa') is-invalid @enderror"
                                        id="tel_casa" name="tel_casa" placeholder="Telefono de casa(10 dígitos)"
                                        value="{{ old('tel_casa') }}">
                                    <div id="alerta6"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cel_tutor">Telefono celular tutor (10
                                        dígitos)</label>
                                    <input type="text" class="form-control  @error('cel_tutor') is-invalid @enderror"
                                        id="cel_tutor" name="cel_tutor" placeholder="Telefono celular del padre o Tutor"
                                        value="{{ old('cel_tutor') }}">
                                    <div id="alerta7"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ciudad_alumno">Ciudad</label>
                                    <input type="text" class="form-control  @error('ciudad_alumno') is-invalid @enderror"
                                        id="ciudad_alumno" name="ciudad_alumno" placeholder="Alcaldia"
                                        value="{{ old('ciudad_alumno') }}">
                                    <div id="alerta8"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alcaldia_alumno">Alcaldia</label>
                                    <input type="text" class="form-control  @error('alcaldia_alumno') is-invalid @enderror"
                                        id="alcaldia_alumno" name="alcaldia_alumno" placeholder="Alcaldia"
                                        value="{{ old('alcaldia_alumno') }}">
                                    <div id="alerta9"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="colonia_alumno">Colonia</label>
                                    <input type="text" class="form-control  @error('colonia_alumno') is-invalid @enderror"
                                        id="colonia_alumno" name="colonia_alumno" placeholder="Colonia"
                                        value="{{ old('colonia_alumno') }}">
                                    <div id="alerta10"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="calle_alumno">Calle y número</label>
                                    <input type=" text" class="form-control  @error('calle_alumno') is-invalid @enderror"
                                        id="calle_alumno" name="calle_alumno" placeholder="Calle y número"
                                        value="{{ old('calle_alumno') }}">
                                    <div id="alerta11"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cp_alumno">Código Postal</label>
                                    <input type="text" class="form-control  @error('cp_alumno') is-invalid @enderror"
                                        id="cp_alumno" name="cp_alumno" placeholder="Alcaldia"
                                        value="{{ old('cp_alumno') }}">
                                    <div id="alerta12"></div>
                                </div>
                            </div>
                            <h4 class="mt-4">Escolaridad</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_curso">Curso</label>
                                    <input type="text" class="form-control "
                                        id="nombre_curso" name="nombre_curso" placeholder="Curso"
                                        value="{{ old('nombre_curso') }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="grado_id">Grado</label>
                                    <select id="grado_id" name="grado_id" class="form-control">
                                        <option selected>Seleccione un grado</option>
                                        @foreach ($grupos as $grupo)
                                            <option value="{{ $grupo->id }}"> {{ $grupo->nombre_grado }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ciclo_escolar">Ciclo Escolar</label>
                                    <select id="ciclo_escolar" name="ciclo_escolar" class="form-control">
                                        <option selected>Seleccione ciclo escolar</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="fecha_ingreso">Fecha de ingreso</label>
                                    <input type="text" class="form-control" id="fecha_ingreso"
                                        name="fecha_ingreso" placeholder="Año de alta">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fecha_baja">Fecha de baja</label>
                                    <input type="text" class="form-control" id="fecha_baja"
                                        name="fecha_baja" placeholder="Año de baja">
                                </div>
                                <div class="form-group col-md-2 mt-4 pt-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">En curso</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estatus">Status</label>
                                    <select id="estatus" name="estatus" class="form-control">
                                        <option selected>Seleccione un status</option>
                                        <option id="1" class="activo">Activo</option>
                                        <option id="2" class="inactivo">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row text-center mb-4 mt-5 boton">
                                <div class="col-md-12 ">
                                    <button type="submit"  onclick="return validarAlum();">Registrar</button>
                                    <a href="{{ route("alumnos.index")}}" class="btn btn-cancelar">Cancelar</a>
                                </div>
                            </div>
                            {{-- <div class=" modal-footer">
                                <button type="submit" class="btn btn-primary"
                                    onclick="return validarAlum();">Registrar</button>
                                <a href="{{ route('alumnos.index') }}"><button type="button" class="btn cerrar"
                                        data-dismiss="modal">Cancelar</button></a>
                            </div> --}}
                        </form>
                        {{-- FIN FORMULARIO --}}

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
