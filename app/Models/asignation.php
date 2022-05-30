<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asignation
 *
 * @property $id
 * @property $estudiante_id
 * @property $materia_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estudiante $estudiante
 * @property Materia $materia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Asignation extends Model
{
    
    static $rules = [
		'estudiante_id' => 'required',
		'materia_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estudiante_id','materia_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante', 'codigo', 'estudiante_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'materia_id');
    }
    

}
