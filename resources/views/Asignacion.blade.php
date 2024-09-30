<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
</head>
<body>
    <class="container">

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img scr="{{ url('img/logo_utvt.png')}}" alt="" width="45">
                TSU-DSM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="officeanvas-header">
                    <h5 class="officanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="officanvas"></button>
                </div>
            <div class="officeanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe.3">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('alumnos')}}">Alumnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('grupos')}}">Grupos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('asignacion')}}">Asignacion</a>
                    </li>
                </ul>
            </div>
        </div>
     </div>
 </nav>
 <br><br>
 <br>
 <h3>Alumno a Grupos</h3>
 <h5>Aisgnacion -> Registro1 <?php echo "";?> {{3>4? "mayor":"menor"}}</h5>
 <hr>
 <br>
 <foaction="{{route('asignacion_registrar')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <h3>Asignacion de Alumno Grupos</h3>

    <div class="input-group mb-3">
        <select class="form-select" id="id_alumno" name="id_alumno">
            <option selected>Selecciona una opcion...</option>
            @foreach ($alumnos as $alumno)
                <option value="{{$alumno->id_alumno}}">{{$alumno->nombre}}</option>
            @endforeach
        </select>
        <label class="input-group-text" for="id_alumno">Alumnos</label>
    </div>


    <div class="input-group mb-3">
        <select class="form-select" id="id_grupo" name="id_grupo">
            <option selected>Selecciona una opcion...</option>
            @foreach ($grupos as $grupo)
                <option value="{{$grupo->id_grupo}}">{{$grupo->nombre}}</option>
            @endforeach
        </select>
        <label class="input-group-text" for="id_grupo">Grupos</label>
    </div>

    <div class="input-group mb-3">
        <select class="form-select" id="ciuatrimestre" name="cuatrimestre">
            <option selected>Selecciona una opcion,,,</option>
            <option value="Primero">Primero</option>
            <option value="Segundo">Segundo</option>
            <option value="Tercero">Tercero</option>
            <option value="Cuarto">Cuarto</option>
            <option value="Quinto">Quinto</option>
            <option value="Sexto">Sexto</option>
            <option value="Septimo">Septimo</option>
            <option value="Octavo">Octavo</option>
            <option value="Noveno">Noveno</option>
            <option value="Decimo">Decimo</option>
            <option value="Onceavo">Onceavo</option>
        </select>
    <label class="input-group-text" for="cuatrimestre">Cuatrimestre</label>
    </div>
 
    <hr><br>
    <button type="submit" class="btn btn-primary">Guardar</button>
 </form>

        <br><br>
        <br>
        
        <h1>Lista de asignacion de Alumnos Grupo</h1>
        <hr><br>
        <table class="table">
        <tr>
            <th>N</th>
            <th>Cuatrimestre</th>
            <th>Grupo</th>
            <th>Nombre</th>
            <th>Otros</th>   
        </tr>
        @foreach ($asignaciones as $asignacion)
        <tr>
            <td>{{$asignacion->id_grupo_alumno}}</td>
            <td>{{$asignacion->cuatrimestre}}</td>
            <td>{{$asignacion->id_grupo}}</td>
            <td>{{$asignacion->id_alumno}}</td>
            <td>
                <a href="{{route('asignacion_borrar',['id'=>$asignacion->id_grupo_alumno])}}">
                    <button type="button" class="btn btn-primary btn-sm" onclick="return confirm('Sefuro que desea borrar el registro')">
                        Borrar
                    </button>
                 </a>
           </td>
        </tr>
        @endforeach
        </table>
        <br><hr><br>

        <br><br><br>
    </div>
    <script>
        $('#multiple-selecct-field').select2(
            {
                theme: "booststrap-5",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100')?'100%':'style',
                placeholder: $(this).data('placeholder'),
                closeOnSelect: false,
            }
        )
    </script>
</body>
</html>