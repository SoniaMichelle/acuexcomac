@extends('layouts.app')
@section('titulo', 'Dashboard Acuexcomac')
@section('contentenido')
    <!-- MAIN -->
    <main>
        <h1 class="title">Dashboard</h1>
        <ul class="breadcrumbs">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="divider">/</li>
            <li><a href="" class="active">Dashboard</a></li>
        </ul>
        <div class="info-data">
            <div class="dash-content">
                <div class="overview">
                    <div class="boxes">
                        <div class="box box1">
                            <i class='bx bx-book-bookmark icon'></i>
                            <span class="text">Total Grados</span>
                            @php
                                use App\Models\Grado;
                                $cant_grado= Grado::count();
                            @endphp
                            <span class="number">{{ $cant_grado }}</span>
                            <small><a href="{{ route('grados.index') }}">ver más</a></small>
                        </div>
                        <div class="box box2">
                            <i class='bx bxs-graduation icon'></i>
                            <span class="text">Total Alumnos</span>
                            @php
                                use App\Models\Alumno;
                                $cant_alum = Alumno::count();
                            @endphp
                            <span class="number">{{ $cant_alum }}</span>
                            <small><a href="{{ route('alumnos.index') }}">ver más</a></small>
                        </div>

                        <div class="box box3">
                            <i class='bx bxs-book-reader icon'></i>
                            <span class="text">Total Docentes</span>
                            @php
                                use App\Models\Docente;
                                $cant_doce = Docente::count();
                            @endphp
                            <span class="number">{{ $cant_doce }}</span>
                            <small><a href="{{ route('docentes.index') }}">ver más</a></small>
                        </div>
                        <div class="box box4">
                            <i class='bx bxs-file-blank'></i>
                            <span class="text">Total Expedientes</span>
                            @php
                                use App\Models\Expediente;
                                $cant_ex = Expediente::count();
                            @endphp
                            <span class="number">{{ $cant_ex }}</span>
                            <small><a href="{{ route('expedientes.index') }}">ver más</a></small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="content-data">
                <div class="head">
                    <h2>Contactos</h2>
                    <div class="menu">
                        <i class='bx bx-dots-horizontal-rounded icon'></i>
                        <ul class="menu-link">
                            <li><a href="#" style="text-decoration: none">Agregar</a></li>
                        </ul>
                    </div>
                </div>
                {{-- CONTACTOS --}}
                <div class="chart">
                    <div id="chart">
                        <div class="table-responsive">
                            <table id="example" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>Celular</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                        <tr>
                                            <td>{{ $alumno->nombre_alumno }}</td>
                                            <td>{{ $alumno->ap_paterno_alumno }}</td>
                                            <td>{{ $alumno->tel_casa }}</td>
                                            <td>{{ $alumno->cel_tutor }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN -->
@endsection
@section('js')
    <script src="js/datatable.js"></script>
@endsection
