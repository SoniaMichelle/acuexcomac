@extends('layouts.plantilla')
@section('title', 'Editar Alumno')
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
                    <h2 class="font-weight-bold text-center">Modificar Datos del Alumno</h2>
                    <div class="p-5 bg-white rouded shadow-lg">
                        <form action="{{ route('alumnos.update', $alumnos) }}" method="post" novalidate>
                            @csrf
                            @method('put')
                            <h4 class="mt-4">Datos del Alumno</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_alumno">Nombre(s)</label>
                                    <input type="text" class="form-control" id="nombre_alumno" name="nombre_alumno"
                                        placeholder="Nombre(s)"
                                        value="{{ old('nombre_alumno', $alumnos->nombre_alumno) }}">
                                    <div id="alerta"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_paterno_alumno">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="ap_paterno_alumno"
                                        name="ap_paterno_alumno" placeholder="Apellido Paterno"
                                        value="{{ old('ap_paterno_alumno', $alumnos->ap_paterno_alumno) }}">
                                    <div id="alerta1"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_materno_alumno">Apellido Materno</label>
                                    <input type="text" class="form-control" id="ap_materno_alumno"
                                        name="ap_materno_alumno" placeholder="Apellido Materno"
                                        value="{{ old('ap_materno_alumno', $alumnos->ap_materno_alumno) }}">
                                    <div id="alerta2"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="curp_alumno">CURP</label>
                                    <input type="text" class="form-control" id="curp_alumno" name="curp_alumno"
                                        placeholder="CURP" value="{{ old('curp_alumno', $alumnos->curp_alumno) }}">
                                    <div id="alerta3"></div>
                                </div>
                                <div class=" form-group col-md-4">
                                    <label for="sexo_alumno">Genero</label>
                                    <select id="sexo_alumno" name="sexo_alumno" class="form-control" ">
                                            <option selected value="{{ $alumnos->sexo_alumno }}">{{ $alumnos->sexo_alumno }}</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenido">Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="edad_alumno">Edad</label>
                                    <input type="text" class="form-control" id="edad_alumno" name="edad_alumno"
                                        placeholder="Edad" value="{{ old('edad_alumno', $alumnos->edad_alumno) }}">
                                    <div id="alerta4"></div>
                                </div>
                            </div>
                            <h4 class="mt-4">Datos de Contacto</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_tutor">Nombre del Padre o Tutor</label>
                                    <input type="text" class="form-control" id="nombre_tutor" name="nombre_tutor"
                                        placeholder="Nombre del Padre o Tutor"
                                        value="{{ old('nombre_tutor', $alumnos->nombre_tutor) }}">
                                    <div id="alerta5"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tel_casa">Telefono de casa (10
                                        dígitos)</label>
                                    <input type="text" class="form-control" id="tel_casa" name="tel_casa"
                                        placeholder="Telefono de casa(10 dígitos)"
                                        value="{{ old('tel_casa', $alumnos->tel_casa) }}">
                                    <div id="alerta6"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cel_tutor">Telefono celular tutor (10
                                        dígitos)</label>
                                    <input type="text" class="form-control" id="cel_tutor" name="cel_tutor"
                                        placeholder="Telefono celular del padre o Tutor"
                                        value="{{ old('cel_tutor', $alumnos->cel_tutor) }}">
                                    <div id="alerta7"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ciudad_alumno">Ciudad</label>
                                    <input type="text" class="form-control" id="ciudad_alumno" name="ciudad_alumno"
                                        placeholder="Alcaldia"
                                        value="{{ old('ciudad_alumno', $alumnos->ciudad_alumno) }}">
                                    <div id="alerta8"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alcaldia_alumno">Alcaldia</label>
                                    <input type="text" class="form-control" id="alcaldia_alumno" name="alcaldia_alumno"
                                        placeholder="Alcaldia"
                                        value="{{ old('alcaldia_alumno', $alumnos->alcaldia_alumno) }}">
                                    <div id="alerta9"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="colonia_alumno">Colonia</label>
                                    <input type="text" class="form-control" id="colonia_alumno" name="colonia_alumno"
                                        placeholder="Password"
                                        value="{{ old('colonia_alumno', $alumnos->colonia_alumno) }}">
                                    <div id="alerta10"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="calle_alumno">Calle y número</label>
                                    <input type=" text" class="form-control" id="calle_alumno" name="calle_alumno"
                                        placeholder="Calle y número"
                                        value="{{ old('calle_alumno', $alumnos->calle_alumno) }}">
                                    <div id="alerta11"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cp_alumno">Código Postal</label>
                                    <input type="text" class="form-control" id="cp_alumno" name="cp_alumno"
                                        placeholder="Alcaldia" value="{{ old('cp_alumno', $alumnos->cp_alumno) }}">
                                    <div id="alerta12"></div>
                                </div>
                            </div>
                            <h4 class="mt-4">Escolaridad</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_curso">Curso</label>
                                    <input type="text" class="form-control " id="nombre_curso" name="nombre_curso"
                                        placeholder="Curso" value="{{ old('nombre_curso', $alumnos->nombre_curso) }}">
                                    <div id="alerta13"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="grado_id">Grado</label>
                                    <select id="grado_id" name="grado_id" class="form-control">
                                        <option selected value="{{ $alumnos->nombre_grado }}">{{ $alumnos->nombre_grado }}</option>
                                        @foreach ($alumnos as $alumno)
                                            <option selected value="{{ $alumnos->id }}">{{ $alumnos->grado_id }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div id="alerta14"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ciclo_escolar">Ciclo Escolar</label>
                                    <input type="text" class="form-control" id="ciclo_escolar" name="ciclo_escolar"
                                        placeholder="Ciclo Escolar"
                                        value="{{ old('ciclo_escolar', $alumnos->ciclo_escolar) }}">
                                    <div id="alerta15"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="fecha_ingreso">Fecha de ingreso</label>
                                    <input type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso"
                                        placeholder="Año de alta"
                                        value="{{ old('fecha_ingreso', $alumnos->fecha_ingreso) }}">
                                    <div id="alerta16"></div>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="fecha_baja">Fecha de baja</label>
                                    <input type="text" class="form-control" id="fecha_baja" name="fecha_baja"
                                        placeholder="Año de baja" value="{{ old('fecha_baja', $alumnos->fecha_baja) }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estatus">Status</label>
                                    <select id="estatus" name="estatus" class="form-control">
                                        <option selected value="{{ $alumnos->estatus }}">{{ $alumnos->estatus }}</option>
                                        <option value="Activo" class="btn btn-success">Activo</option>
                                        <option value="Inactivo" class="btn btn-danger">Inactivo</option>
                                    </select>
                                    <div id="alerta17"></div>
                                </div>
                            </div>
                            <div class="row text-center mb-4 mt-5 boton">
                                <div class="col-md-12 ">
                                    <button type="submit" onclick="return validarAlum();">Editar</button>
                                    <a href="{{ route('alumnos.index') }}" class="btn btn-cancelar">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/validacionForm.js') }}"></script>

@endsection
