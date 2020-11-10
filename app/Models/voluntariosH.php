<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class voluntariosH
 * 
 * @property int $voluntarioH_id
 * @property string $profesion 
 * @property string $disponibilidad
 * @property string $cantidad_de_trabajos
 * @property int $voluntario_fk
 * 
 * @package App\Models
 */

class voluntariosH extends Model
{
    protected $table = 'voluntarios_Humanitarios';
    protected $cast = [
        'voluntario_fk' => 'int'
    ];

    protected $fillable = [
        'profesion',
        'disponibilidad',
        'cantidad_de_trabajos',
        'voluntario_fk'
    ];

    public function voluntarios()
    {
        return $this->belongsTo(voluntarios::class, 'voluntario_fk');
    }

}
