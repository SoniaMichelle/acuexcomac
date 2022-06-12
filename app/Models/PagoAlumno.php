<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoAlumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'alumno_id',
        'concepto_alum',
        'cantidad_alum',
        'fecha_alum',
    ];
}
