<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Productos extends Model
{
    protected $table = 'productos';

    protected $cast = [
        'tipoEnv_fk' => 'int',
        
    ];

    protected $fillable = [
        'descripcion', 
        'tipoEnv_fk'

    ];

    public function tipo_envios()
    {
        return $this->hasMany(Tipo_Envios::class, 'tipoEnv_fk');
    }
}
