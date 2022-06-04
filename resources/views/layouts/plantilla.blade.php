<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    {{-- LIBRERIA --}}
    <link href="{{ asset('libreria/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- DATABLE --}}
    <link href="{{ asset('libreria/datatables/datatables.min.css') }}" rel="stylesheet">
{{--     <link href="{{ asset('libreria/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
 --}}    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"> --}}
    <link href="{{ asset('libreria/boxicons-2.1.2/css/boxicons.css') }}" rel="stylesheet">

    {{-- ESTILOS --}}
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
     <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">

    <!-- Styles -->{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @yield('css')
</head>

<body>
    @auth
    @yield('contenido')
    @endauth
    <script src="{{ asset('libreria/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('libreria/popper/popper.min.js') }}"></script>
    <script src="{{ asset('libreria/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/apexcharts') }}"></script>
    
    @yield('js')
</body>
</html>