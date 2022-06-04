<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Centro Acuexcomac</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- ESTILOS --}}
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>
<body>
    <div class="contenedor">
        <section class="grid">
            <img src="{{asset('img/logo.png')}}" class="logo1" alt="" >
            <div class="grid-texts">
                <h2 class="grid-title"> Centro Psicopedagogico</h2>
                <h2 class="grid-title grid-title--transform"> Acuexcomac</h2>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="text-sm text-gray-700 dark:text-gray-500 underline"><button
                                        type="button">Home</button></a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500"><button
                                        type="button">Login</button></a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </section>
    </div>
</body>
</html>