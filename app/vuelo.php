<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\vuelo;

class vuelo extends Model 

{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'vuelo';

    /**
     * 
     * 
     * @var array
     */
    protected $fillable = [
        'id', 'donde', 'registro', 'revisar','invitado'
    ];
}
