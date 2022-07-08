<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    protected $table = 'servicio';
    protected  $primaryKey = 'idServicio';
    

    protected $fillable = [
        	'nomServicio',
            'descripcion',
            'fechaServicio',
            'horaInicio',
            'horaFin',
            'direccion',
            'numeroCli',
            'estatus',
            'formaPago',
            'idUsuario',
            'idStripper',
    ];
}
