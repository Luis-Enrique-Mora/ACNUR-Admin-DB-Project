<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipo_voluntarios
 * 
 * @property int $tipovol_id
 * @property string $nombre
 * @property Collection|voluntarios[] $voluntarios
 *
 * @package App\Models
 */

class Tipo_voluntarios extends Model
{
   protected $table = 'tipo_voluntarios';

   protected $fillable = [
        'nombre'
   ];

   public function voluntarios()
   {
       return $this->hasMany(voluntarios::class, 'tipovol_fk');
   }
}
