<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'ap_paterno_alumno',
        'ap_materno_alumno',
        'curp_alumno',
        'sexo_alumno',
        'edad_alumno',
        'nombre_tutor',
        'tel_casa',
        'cel_tutor',
        'ciudad_alumno',
        'alcaldia_alumno',
        'colonia_alumno',
        'calle_alumno',
        'cp_alumno',
        'nombre_curso',
        'grado_id',
        'ciclo_escolar',
        'fecha_ingreso',
        'fecha_baja',
        'estatus',
    ];
}
