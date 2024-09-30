<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{url ('css/bootstrap.min.css')}}" rel="stylesheet">

    <script scr="{{url('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</head>
<body>
        <div class="container">
            <h3>Nuevo Registro</h3>
            <h5>CRUD:Alumnos-> Registro</h5>
            <hr>
            <br>
            <form action="{{ route ('alumno_registrar')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
           <h3>Datos Personales</h3>
           
           <div class="form-floating mb-3">
            ><input type="input" class="form-control" name="nombre" value="{{old('nombre')}}" id="floatingNombre"
                placeholder="ejemplo: Carol Garcia" aria-describedby="NombreHelp">
            <label for="floatingNombre">Nombre</label>
            <div id="NombreHelp" class="form-text">@if ($errors->first('nombre'))<i>El campo Nombre(s) no es correcto!!!</i>@endif</div>
           </div>
        
           <div class="form-floating mb-3">
            ><input type="input" class="form-control" name="fn" value="{{old('fn')}}" id="floatingNombre"
                placeholder="ejemplo: 20/11/2005" aria-describedby="FnHelp">
            <label for="floatingNombre">Fecha de Nacimiento</label>
            <div id="FnHelp" class="form-text">Coloque su fecha de Nacimiento (<i>: dia/mes/año)</div>
           </div>

           <div class="form-floating mb-3">
            ><input type="input" class="form-control" name="foto" id="floatingfoto"placeholder="- - - -"aria-describedby="fotoHelp">
            <label for="floatingNombre">Foto</label>
            <div id="fotoHelp" class="form-text">Busque una imagen para su perfil(<i> Formatos</i>: jpg/png/bmp)</div>
           </div>

           <hr><br>
           <button type="submit" class="btn btn-primary">Guardar</button>
           <a href="{{ route('alumos')}}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a> 
            </form>

            <br><br><br>
        </div>
</body>
</html>
