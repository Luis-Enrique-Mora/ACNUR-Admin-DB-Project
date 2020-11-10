<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class voluntariosA
 * 
 * @property int $voluntarioA_id
 * @property int $voluntario_fk
 * 
 * @package App\Models
 */

class voluntariosA extends Model
{
    protected $table = 'voluntarios_Administrativos';
    protected $cast = [
        'sede_fk' => 'int'
    ];

    protected $fillable = [
        'voluntario_fk'
    ];

    public function voluntarios()
    {
        return $this->belongsTo(voluntarios::class, 'voluntario_fk');
    }

}
