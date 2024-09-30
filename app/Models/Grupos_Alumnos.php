<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupos_Alumnos extends Model
{
    use HasFactory;
    protected $table = 'grupo_alumno';
    protected $primarikey = 'id__grupo_alumno';
    protected $fillable =[
        'id_alumno',
        'id_grupo',
        'cuatrimestre'
    ];
}
