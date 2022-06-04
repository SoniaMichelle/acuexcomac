<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nomina extends Model
{
    use HasFactory;
    protected $fillable = [
        'docente',
        'fecha_nomina',
        'cantidad_nomina'
    ];
   
}
