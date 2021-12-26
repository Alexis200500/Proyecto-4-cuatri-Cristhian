<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clientes;

class Clientes extends Model 

{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'clientes';

    /**
     * 
     * 
     * @var array
     */
    protected $fillable = [
        'id', 'nombre', 'app', 'apm', 'fn', 'genero', 'telefono',
    ];
}
