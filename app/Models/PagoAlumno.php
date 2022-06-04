<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PagoAlumno extends Model
{
    use HasFactory;
    protected $fillable = [
        'alum',
        'concepto_alum',
        'cantidad_alum',
        'fecha_alum',
    ];
}
