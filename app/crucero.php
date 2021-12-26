<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\crucero;

class crucero extends Model 
{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'cruceros';

    /**
     * 
     * 
     * @var array
     */
    protected $fillable = [
        'id', 'donde', 'fechadeinicio', 'categorias',
    ];
}
