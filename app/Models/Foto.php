<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
    protected $table = 'foto';
    protected  $primaryKey = 'idFoto';
    

    protected $fillable = [
        	'url',
            'idStripper',
    ];
}
