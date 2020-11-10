<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class voluntarios
 * 
 * @property int $voluntario_id
 * @property string $cedula
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property int $sede_fk
 * 
 * @package App\Models
 */

class voluntarios extends Model
{
    protected $table = 'voluntarios';
    protected $cast = [
        'sede_fk' => 'int'
    ];

    protected $fillable = [
        'cedula',
        'nombre',
        'apellido1',
        'apellido2',
        'sede_fk'
    ];

    public function sedes()
    {
        return $this->belongsTo(Sedes::class, 'sede_fk');
    }

    public function voluntarios()
    {
        return $this->hasMany(voluntarios::class, 'voluntario_fk');
    }

}
