<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Alumnos;

class ControladorAlumnos extends Controller
{
    //alumnos lista
    public function alumnos(){
        return view('alumnos')->with(['alumnos' => Alumnos::all()]);
    }

    ///alumno alta
    public function alumno_alta(){
        return view("alumno_alta");
    }

    public function alumno_registrar(Request $request){

        $this->validate($request, [
            'nombre' => 'required',
            'fn' => 'required'
        ]);

        if ($request->file('foto') != '') {
            //obtener el campo de fila definido en el formulario
            $file = $request->file('foto');
            //obtener el nombre del archivo (file)
            $img = $file->getClientOriginalName();
            //obtener fecha y hora
            $ldate = date("Ymd_His_");
            $img2 = $ldate . $img;
            //indicamos el nombre y la ruta donde se almacena el archivo
            Storage::disk('local')->put($img2, File::get($file));
        } else {
            $img2 = "persona.jpg";
        }

        // Crear un nuevo registro de alumno
        Alumnos::create([
            'nombre' => $request->input('nombre'),
            'fecha_n' => $request->input('fecha_n'),
            'foto' => $img2
        ]);

        return redirect()->route('alumnos');
    }
    
    public function alumno_detalle($id){
        $query = Alumnos::find($id);
        return view ('alumno_detalle')
        ->with(['alumno'=>$query]);
    }

    public function alumno_editar($id){
        $query = Alumnos::find($id);
        return view ('alumno_editar')
        ->with(['alumno'=>$query]);
    }

    public function alumno_salvar (Alumnos $id,Request $request){

        if($request->file('foto1') !=''){
            $file = $request->file('foto1');
            $img=$file->getClientOriginalName();
            $ldate=date('Ymd_His_');
            $img2=$ldate . $img;
            \Storage::disk ('local')->put($img,\File::get($file));
    }
        else{
            $img2 = $request->foto2;
        }
        $query = Alumnos::find($id->id_alumno);
            $query -> nombre = $request -> nombre;
            $query -> fecha_n = $request -> fecha_n;
            $query -> foto = $img2;
        $query -> save();
        return redirect()->route("alumno_editar",['id'=>$id->id_alumno]);
}

    public function alumno_borrar(Alumnos $id){
    $id->delete();
    return redirect()->route('alumno');
    }
}
