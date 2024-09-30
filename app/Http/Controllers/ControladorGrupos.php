<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Grupos;

class ControladorGrupos extends Controller
{
    //alumnos lista
    public function alumnos(){
        return view('grupos')->with(['grupos' => Grupos::all()]);
    }

    ///alumno alta
    public function grupo_alta(){
        return view("grupo_alta");
    }

    public function grupo_registrar(Request $request){

        $this->validate($request, [
            'clave' => 'required',
            'nombre' => 'required',
        ]);
        // Crear un nuevo registro de alumno
        Grupos::create([
            'clave' => $request->input('clave'),
            'nombre' => $request->input('nombre'),
            
        ]);

        return redirect()->route('alumnos');
    }
}
