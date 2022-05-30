<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $nombre
 * @property $codigo
 * @property $carrera
 * @property $creditos
 * @property $correo
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignation[] $asignations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'codigo' => 'required',
		'creditos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','codigo','carrera','creditos','correo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignations()
    {
        return $this->hasMany('App\Models\Asignation', 'estudiante_id', 'codigo');
    }
    

}
