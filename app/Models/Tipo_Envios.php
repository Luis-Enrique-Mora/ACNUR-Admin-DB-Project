<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tipo_Envios extends Model
{
    protected $table = 'tipo_envios';

    protected $fillable = [
        'descripcion'
    ];
}
