<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
static $rules=[
    'title'      => 'required',
    'descripcion' => 'required',
    'start'      => 'required',
    'end'        => 'required',
    'horaIni'        => 'required',
    'horaFin'        => 'required',
    'direccion' => 'required',
    'numeroCli' => 'required',
   
    'formaPago' => 'required',
    'idStripper' => 'required'
];
    

    protected $fillable = [
        	'title',
            'descripcion',
            'start',
            'end',
            'timeStrart',
            'timeEnd',
            'direccion',
            'numeroCli',
            'estatus',
            'formaPago',
            'idUsuario',
            'idStripper'
    ];
}
