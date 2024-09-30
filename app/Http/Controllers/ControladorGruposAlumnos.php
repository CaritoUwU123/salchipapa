<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use Illuminate\Support\Facades\Session;

use App\Models\Grupos_Alumnos;
use App\Models\Alumnos;
use App\Models\Grupos;
class ControladorGruposAlumnos extends Controller
{
    //-------Alumno a Grupo: Lista
    public function asignacion()
    {
        return vie('asignacion')
        ->with(['grupos'=>Grupos::all])
        ->with(['alumnos'=>Alumnos::all])
        ->with(['asignaciones'=>Grupos_Alumnos::all]);
    }
    //----------Alumno a  Grupo: Alta
    public function asignacion_registrar(Request $request)
    {
        Grupos_Alumnos::create(array(
            'id_alumno'=> $request->input('id_alumno'),
            'id_grupo'=>$request->input('id_grupo'),
            'cuatrimestre'=>$request->input('cuatrimestre ')
        ));

        return redirect()->route('asignacion');
    }

    //---------------Alumno Grupo borrar
    public function asiganacion_borrar(Grupos_Alumnos $id)
    {
    $id->delete();
       return redirect()->route('asignacion');
    }
}

