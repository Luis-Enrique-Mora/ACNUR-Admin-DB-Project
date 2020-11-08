<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Envio_Sedes extends Model
{
    protected $table = 'envio_sedes';

    protected $cast = [
        'idEnvio' => 'int',
        'idSede' => 'int'
    ];

    protected $fillable = [
        'idEnvio',
        'idSede'
    ];

    public function envios()
    {
        return $this->hasMany(Envios::class, 'idEnvio');
    }

    public function sedes()
    {
        return $this->hasMany(Sedes::class, 'idSede');
    }
}
