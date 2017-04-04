<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $table = 'enfermedad';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'codigoenfermedad',
        'nombreenfermedad',
        /*FK*/
        'idtipoenfermedad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
    /**
    * Eliminar timestamps del modelo
    */
    public $timestamps = false;
    /**
     * RELACIONES
     *
     */
     public function tipoEnfermedades(){
         return $this->hasMany('App\TipoEnfermedad');
     }
     /**
     * RELACIONES
     *
     */
     public function diagnostico(){
         return $this->belongsTo('App\Diagnostico');
     }
}
