<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Envios extends Model
{
    protected $table = 'envios';

    protected $fillable = [
        'destino',
        'fecha_env'
    ];

}
