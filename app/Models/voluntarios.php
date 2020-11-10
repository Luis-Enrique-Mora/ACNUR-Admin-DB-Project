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
 * @property string $profesion 
 * @property string $disponibilidad
 * @property string $cantidad_de_trabajos
 * @property int $tipovol_fk
 * @property int $sede_fk
 * 
 * @package App\Models
 */

class voluntarios extends Model
{
    protected $table = 'voluntarios';
    protected $cast = [
        'sede_fk' => 'int',
        'tipovol_fk' => 'int'
    ];

    protected $fillable = [
        'cedula',
        'nombre',
        'apellido1',
        'apellido2',
        'profesion',
        'disponibilidad',
        'cantidad_de_trabajos',
        'tipovol_fk',
        'sede_fk'
    ];

    public function sedes()
    {
        return $this->belongsTo(Sedes::class, 'sede_fk');
    }

    public function tipo_voluntarios()
    {
        return $this->belongsTo(Tipo_voluntarios::class, 'tipovol__fk');
    }
}
