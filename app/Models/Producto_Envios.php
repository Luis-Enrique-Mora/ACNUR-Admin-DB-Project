<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Producto_Envios extends Model
{
    protected $table = 'producto_envios';

    protected $cast = [
        'producto_fk' => 'int',
        'envio_fk' => 'int'
    ];

    protected $fillable = [
        'cantidad',
        'producto_fk',
        'envio_fk'
    ];

    public function  productos()
    {
        return $this->hasMany(Productos::class, 'producto_fk');
    }

    public function envios()
    {
        return $this->hasMany(Envios::class, 'envio_fk');
    }

  
}
