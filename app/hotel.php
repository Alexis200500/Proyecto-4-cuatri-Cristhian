<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\hotel;

class hotel extends Model 
{
    /**
     * 
     * 
     * @var string
     */
    protected $table = 'hotel';

    /**
     * 
     * 
     * @var array
     */
    protected $fillable = [
        'id', 'registro', 'revisa', 'invitado', 
    ];
}
