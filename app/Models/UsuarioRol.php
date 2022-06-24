<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
    protected $table = 'model_has_roles';
    //protected  $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        	'role_id',
            'model_type',
            'model_id',
    ];
}
