<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_docente',
        'ap_paterno_docente',
        'ap_materno_docente',
        'sexo_docente',
        'edad_docente',
        'curp_docente',
        'rfc_docente',
        'email_docente',
        'tel_casa_docente',
        'cel_docente',
        'ciudad_docente',
        'alcaldia_docente',
        'colonia_docente',
        'calle_docente',
        'cp_docente',
        'cedula_docente',
        'especialidad',
        'profesion',
        'asignatura'
    ];
}
