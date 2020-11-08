<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Envio_Voluntarios extends Model
{
    protected $table = 'envio_voluntarios';

    protected $cast = [
        'voluntario_fk' => 'int',
        'envio_fk' => 'int'
    ];

    protected $fillable = [
        'voluntario_fk',
        'envio_fk'
    ];

    public function voluntarios()
    {
        return $this->hasMany(voluntarios::class, 'voluntario_fk');
    }

    public function envios()
    {
        return $this->hasMany(Envios::class, 'envio_fk');
    }
}
