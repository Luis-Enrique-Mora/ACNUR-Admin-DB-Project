<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

/**
 * Class Socios
 * 
 * @property int $socio_id
 * @property string $nombre
 * @property string $apellido1
 * @property string $apellido2
 * @property string $direccion
 * @property Carbon $fecha_pago
 * @property string $cuanta_bancaria
 * @property int $tipo_cuota_fk
 * @property int $sede_fk
 * 
 * @package App\Models
 */

class Socios extends Model
{
    protected $table = 'socios';

    protected $cast = [
        'tipo_cuota_fk' => 'int',
        'sede_fk' => 'int'
    ];

    protected $fillable = [
        'nombre',
        'apellido1',
        'apellido2',
        'direccion',
        'fecha_pago',
        'cuanta_bancaria',
        'tipo_cuota_fk',
        'sede_fk'
    ];

    public function sedes()
    {
        return $this->belongsTo(Sedes::class, 'sede_fk');
    }

    public function tipo_cuotas()
    {
        return $this->belongsTo(Tipo_cuotas::class, 'tipo_cuota_fk');
    }
}
