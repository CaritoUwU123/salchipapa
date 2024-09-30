<?php

use App\Http\Controllers\ControladorAlumnos;
use App\Http\Controllers\ControladorGrupos;
use App\Http\Controllers\ControladorGruposAlumnos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//*-------------------------Rutas Alumno-----------------------------------
Route::name('alumnos')->get('/alumno',[ControladorAlumnos::class, 'alumnos']);
Route::name('alumno_alta')->get('/alumno_alta',[ControladorAlumnos::class, 'alumno_alta']);
Route::name('alumno_registrar')->post('/alumno_registrar',[ControladorAlumnos::class, 'alumnos_registrar']);

Route::name('alumno_detalle')->get('/alumno_detalle/{id}',[ControladorAlumnos::class, 'alumnos_detalle']);
Route::name('alumno_editar')->get('/alumno_editar/{id}',[ControladorAlumnos::class, 'alumno_editar']);
Route::name('alumno_salvar')->put('/alumno_salvar/{id}',[ControladorAlumnos::class, 'alumno_salvar']);
Route::name('alumno_borrar')->get('/alumno_borra/{id}',[ControladorAlumnos::class, 'alumno_borrar']);


//*-------------------------Rutas Grupo-----------------------------------
Route::name('grupos')->get('/grupo',[ControladorGrupos::class, 'grupos']);
Route::name('grupo_alta')->get('/grupo_alta',[ControladorGrupos::class, 'grupo_alta']);
Route::name('grupo_registrar')->post('/grupo_registrar',[ControladorGrupos::class, 'grupo_registrar']);

Route::name('grupo_detalle')->get('/grupo_detalle/{id}',[ControladorGrupos::class, 'grupo_detalle']);
Route::name('grupo_editar')->get('/grupo_editar/{id}',[ControladorGrupos::class, 'grupo_editar']);
Route::name('grupo_salvar')->put('/grupo_salvar/{id}',[ControladorGrupos::class, 'grupo_salvar']);
Route::name('grupo_borrar')->get('/grupo_borra/{id}',[ControladorGrupos::class, 'grupo_borrar']);

//*-------------------------Rutas Alumno  a Grupó-----------------------------------
Route::name('asignacion')->get('/asignacion',[ControladorGruposAlumnos::class, 'asignacion']);
Route::name('asignacion_registrar')->post('/asignacion_registrar',[ControladorGruposAlumnos::class, 'asignacion_registrar']);
Route::name('asignacion_borar')->get('/asignacion_borar/{id}',[ControladorGruposAlumnos::class, 'asignacion_borrar']);