<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Program
 * 
 * @property int $sede_id
 * @property int $nombre_sede
 * @property int $nombre_director
 * @property int $apellido1
 * @property int $apellido2
 * @property Collection|Socios[] $socios
 * @property Collection|voluntarios[] $voluntarios
 *
 * @package App\Models
 */

class Sedes extends Model
{
    protected $table = 'sedes';

    protected $fillable = [
        'nombre_sede',
        'domicilio',
        'nombre_director',
        'apellido1',
        'apellido2'
    ];

    public function socios()
    {
        return $this->hasMany(Socios::class, 'sede_fk');
    }

    public function voluntarios()
    {
        return $this->hasMany(voluntarios::class, 'sede_fk');
    }
}
