<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\usuario;

class usuario extends Model 
{

    protected $table = 'usuario';
    protected $fillable = [
        'id', 'nombre', 'correo', 'password',
    ];

}
