<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- TITULO DE LAS VENTANAS --}}
    <title>@yield('titulo')</title>
    {{-- FAVICOM --}}
    <link rel="shortcut icon" href="{{ asset('img/Logo3.png') }}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- LIBRERIA --}}
    <link href="{{ asset('libreria/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('libreria/sweetAlert2/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('libreria/animate/animate.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('libreria/boxicons-2.1.2/css/boxicons.css') }}" rel="stylesheet">

    {{-- DATATABLE --}}
    <link href="{{ asset('libreria/datatables/datatables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">

    {{-- <link rel="stylesheet" href="{{asset('dataTables/datatables.min.css')}}"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
   {{--  <link href="{{ asset('css/tabla.css') }}" rel="stylesheet"> --}}

    @yield('css')
</head>

<body>
    @auth
        <!-- SIDEBAR -->
        <section id="sidebar">
            <a href="" class="brand">
                <span class="image">
                    <img src={{ asset('img/Logo3.png') }} alt="">
                </span> Acuexcomac
            </a>
            <ul class="side-menu">
                <li><a href="{{ route('home') }}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
                <li class="divider" data-text="Menu">Menu</li>
                <li>
                    <a href="#"><i class='bx bxs-graduation icon'></i>Alumnos<i
                            class='bx bx-chevron-right icon-right'></i></a>
                    <ul class="side-dropdown">
                        <li><a href="{{ route('alumnos.index') }}">Todos los Alumnos</a></li>
                       {{--  <li><a href="{{ route('alumnos.create') }}">Nuevo Alumno</a></li> --}}
                        <li><a href="{{ route('grados.index') }}">Grados</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class='bx bxs-book-reader icon'></i>Docente<i
                            class='bx bx-chevron-right icon-right'></i></a>
                    <ul class="side-dropdown">
                        <li><a href="{{ route('docentes.index') }}">Todos los docentes</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class='bx bxs-dollar-circle icon'></i>Pagos<i
                            class='bx bx-chevron-right icon-right'></i></a>
                    <ul class="side-dropdown">
                        <li><a href="{{ route('nomina.index') }}">Pagos Nomina</a></li>
                        <li><a href="{{ route('pago.index') }}">Pagos Alumnos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class='bx bxs-notepad icon'></i>Eventos<i class='bx bx-chevron-right icon-right'></i></a>
                    <ul class="side-dropdown">
                        <li><a href="{{ route('evento') }}">Todos los eventos</a></li>
                    </ul>
                </li>
                <li class="divider" data-text="Gestor Archivos">Gestor</li>
                <li>
                    <a href="#"><i class='bx bxs-file icon'></i> Expedientes <i
                            class='bx bx-chevron-right icon-right'></i></a>
                    <ul class="side-dropdown">
                        <li><a href="{{ route('expedientes.index') }}">Todos los evances</a></li>
                    </ul>
                </li>
            </ul>
            <div class="ads">
                   <div class="wrapper">
                    <a class="btn-upgrade" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                   {{--  <p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p> --}}
                </div>
            </div>
        </section>
        <!-- SIDEBAR -->
        <!-- NAVBAR -->
        <section id="content">
            <!-- NAVBAR -->
            <nav>
                <i class='bx bx-menu toggle-sidebar'></i>
                <span class="divider"></span>
                <div class="profile">
                    {{-- PERFIL --}}
                    <img src="{{ asset('img/perfil.jpg') }}" alt="">
                    <ul class="profile-link">
                        <li><a href="{{ route('newPassword') }}" class="edit"><i class='bx bxs-user-circle icon perfil'></i> Perfil</a></li>
                        <li>
                            <a class="go-out" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                <i class='bx bxs-log-out-circle salir'></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('contentenido')
           {{--  @include('sweetalert::alert') --}}
           @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

        </section>
        <!-- NAVBAR -->
    @endauth
    @yield('content')

    {{-- JS --}}
    <script src="{{ asset('libreria/jquery/jquery.js') }}"></script>
    <script src="{{ asset('libreria/popper/popper.min.js') }}"></script>
    <script src="{{ asset('libreria/bootstrap/js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ asset('libreria/sweetAlert2/sweetalert2.all.min.js') }}"></script> --}}
    <script src="{{ asset('libreria/datatables/datatables.min.js') }}"></script>
  {{--   <script src="{{ asset('https://cdn.jsdelivr.net/npm/apexcharts') }}"></script> --}}
 {{--  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src=" https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src=" https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> --}}
  {{-- TABLA RESPONSIVA --}}
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('js/dash.js') }}"></script>

    @yield('js')
</body>

</html>
