<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="libreria/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <h1 class="text-center">Lista de ALumnos</h1>
    <table class="table table-bordered mgt-3">
        <thead>
            <tr class="table-active">
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                {{-- <th>Eliminar</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($grados as $grado)
                <tr>
                    <td value="{{ $grado->id }}">{{ $grado->nombre_alumno }}</td>
                    <td>{{ $grado->ap_paterno_alumno }}</td>
                    <td>{{ $grado->ap_materno_alumno }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>