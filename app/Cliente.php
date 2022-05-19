<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable = [
        'id','nombre', 'email', 'domicilio','telefono','fecha_nac'
    ];
}
