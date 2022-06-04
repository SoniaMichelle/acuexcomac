@extends('layouts.plantilla')
@section('title', 'Registro Docente')
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
                        <form action="{{route('docentes.store')}}" method="POST">
                            @csrf
                            <h4 class="mt-4">Datos del Docente</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nombre_docente">Nombre(s)</label>
                                    <input type="text" class="form-control" id="nombre_docente" name="nombre_docente"
                                        placeholder="Nombre(s)" value="{{ old('nombre_docente') }}">
                                    <div id="alerta"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_paterno_docente">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="ap_paterno_docente"
                                        name="ap_paterno_docente" placeholder="Apellido Paterno"
                                        value="{{ old('ap_paterno_docente') }}">
                                    <div id="alerta1"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ap_materno_docente">Apellido Materno</label>
                                    <input type="text" class="form-control" id="ap_materno_docente"
                                        name="ap_materno_docente" placeholder="Apellido Materno"
                                        value="{{ old('ap_materno_docente') }}">
                                    <div id="alerta2"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class=" form-group col-md-6">
                                    <label for="sexo_docente">Genero</label>
                                    <select id="sexo_docente" name="sexo_docente" class="form-control"
                                        value="{{ old('sexo_docente') }}">
                                        <option selected>Seleccione un genero</option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="edad_docente">Edad</label>
                                    <input type="text" class="form-control" id="edad_docente" name="edad_docente"
                                        placeholder="Edad" value="{{ old('edad_docente') }}">
                                    <div id="alerta3"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="curp_docente">CURP)</label>
                                    <input type="text" class="form-control" id="curp_docente" name="curp_docente"
                                        placeholder="CURP" value="{{ old('curp_docente') }}">
                                    <div id="alerta4"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="rfc_docente">RFC</label>
                                    <input type="text" class="form-control" id="rfc_docente" name="rfc_docente"
                                        placeholder="RFC" value="{{ old('rfc_docente') }}">
                                    <div id="alerta5"></div>
                                </div>
                            </div>
                            <h4 class="mt-4">Datos de Contacto</h4>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="email_docente">Email</label>
                                    <input type="text" class="form-control" id="email_docente" name="email_docente"
                                        placeholder="email" value="{{ old('email_docente') }}">
                                    <div id="alerta6"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="tel_casa_docente">Telefono de casa</label>
                                    <input type="text" class="form-control" id="tel_casa_docente" name="tel_casa_docente"
                                        placeholder="Telefono de casa(10 dígitos)" value="{{ old('tel_casa_docente') }}">
                                    <div id="alerta7"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cel_docente">Telefono celular</label>
                                    <input type="text" class="form-control" id="cel_docente" name="cel_docente"
                                        placeholder="Telefono celular del docente(10 digitos)" value="{{ old('cel_docente') }}">
                                    <div id="alerta8"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ciudad_docente">Ciudad</label>
                                    <input type="text" class="form-control" id="ciudad_docente" name="ciudad_docente"
                                        placeholder="Ciudad" value="{{ old('ciudad_docente') }}">
                                    <div id="alerta9"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="alcaldia_docente">Alcaldia</label>
                                    <input type="text" class="form-control" id="alcaldia_docente" name="alcaldia_docente"
                                        placeholder="Alcaldia" value="{{ old('alcaldia_docente') }}">
                                    <div id="alerta10"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="colonia_docente">Colonia</label>
                                    <input type="text" class="form-control" id="colonia_docente" name="colonia_docente"
                                        placeholder="Password" value="{{ old('colonia_docente') }}">
                                    <div id="alerta11"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="calle_docente">Calle y número</label>
                                    <input type=" text" class="form-control" id="calle_docente" name="calle_docente"
                                        placeholder="Calle y número" value="{{ old('calle_docente') }}">
                                    <div id="alerta12"></div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="cp_docente">Código Postal</label>
                                    <input type="text" class="form-control" id="cp_docente" name="cp_docente"
                                        placeholder="Alcaldia" value="{{ old('cp_docente') }}">
                                    <div id="alerta13"></div>
                                </div>
                            </div>
                            <h4 class="mt-4">Escolaridad</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="cedula_docente">Cedula</label>
                                    <input type="text" class="form-control" id="cedula_docente"
                                        name="cedula_docente" placeholder="Ingrese cedula profesional ">
                                        <div id="alerta14"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="especialidad">Especialidad</label>
                                    <input type="text" class="form-control" id="especialidad"
                                        name="especialidad" placeholder="Ingrese la especialidad ">
                                        <div id="alerta15"></div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="profesion">Profesion</label>
                                    <input type="text" class="form-control" id="profesion"
                                        name="profesion" placeholder="Ingrese la profesión">
                                        <div id="alerta16"></div>
                                </div>
                                <div class=" form-group col-md-6">
                                    <label for="asignatura">Asignatura</label>
                                    <select id="asignatura" name="asignatura" class="form-control"
                                        value="{{ old('asignatura') }}">
                                        <option selected>Seleccione una asignatura</option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row text-center mb-4 mt-5 boton">
                                <div class="col-md-12 ">
                                    <button type="submit" onclick="return valDocenet();">Registrar</button>
                                    <a href="{{ route("docentes.index")}}" class="btn btn-cancelar">Cancelar</a>
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
    {{-- VALIDACION REGISTRO --}}
    <script src="{{ asset('js/validacionForm.js') }}"></script>
@endsection
