<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    static $rules =[
        'title'=>'required',
        'descripcion'=>'required',
        'costo_event'=>'required',
        'start'=>'required',
        'end'=>'required',
        'color'=>'required',
    ];
    /* 6. DISTINGUIR CUALES SON LOS DATOS A TRABAJAR */
    protected $fillable =['title','descripcion','costo_event','start','end','color'];
    }
