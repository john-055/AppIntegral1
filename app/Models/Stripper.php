<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stripper extends Model
{
    protected $table = 'stripper';
    protected  $primaryKey = 'idStripper';
   

    protected $fillable = [
        	'descripcion',
            'precio',
            'correo',
            'telefono',
            'idUsuario',
    ];
}
