<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alumnos</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <div class="container">
        <h3>Lista de Alumnos del DSM-44</h3>
        <h5>CRUD:Alumnos</h5>
        <hr>
        <br>
        <p style ="text-aling: right">
        <a href="{{ route ('alumno_alta')}}">
        <button type="button" class="btn btn-primary btn-sm">Nuevo Registro Alumno</button>
        </a>
        </p>
        <hr><br>
        <table class="table">
        <tr>
            <th>Foto</th>
            <th>N</th>
            <th>Nombre</th>
            <th>F.N</th>
        </tr>

        @foreach ( $alumnos as $alumno )

        <tr>
            <td><img src="{{ url('img/.$alumno->foto')}}"style="width: 30px;heigth: 30px;"></td>
            <td>{{ $alumno->id_alumno }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->fn }}</td>
        </tr> 

        @endforeach

        </table>
</body>
</html>