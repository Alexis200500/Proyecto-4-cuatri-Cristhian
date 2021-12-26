<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\alquila;

class alquila extends Model 

{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'alquiler';

    /**
     * 
     * 
     * @var array
     */
    protected $fillable = [
        'id', 'donde', 'fechadeinicio', 'fechaderegreso',
    ];
}
