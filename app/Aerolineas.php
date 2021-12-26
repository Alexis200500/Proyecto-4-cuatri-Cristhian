<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Aerolineas;

class Aerolineas extends Eloquent 

{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'aerolineas';

    /**
     * 
     * 
     * @var array
     */
    
    protected $connection = 'mongodb';
    protected $collection = 'aerolineas';
    protected $fillable = [
        'aerolineas', 'nombrea', 'vuelo', 'precio',
    ];
}
