<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo_cuotas
 * 
 * @property int $cuota_id
 * @property string $tipo
 * @property int $cantidad
 * @property Collection|Socios[] $socios
 *
 * @package App\Models
 */

class Tipo_cuotas extends Model
{
   protected $table = 'tipo_cuotas';

   protected $fillable = [
        'tipo',
        'cantidad'
   ];

   public function socios()
   {
       return $this->hasMany(Socios::class, 'tipo_cuota_fk');
   }
}
