<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingreso';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        /*FK*/
        'iddoctor',
        'idexpediente',
        'idcamilla',
        'idsala'
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
     public function doctores(){
         return $this->hasMany('App\Doctor');
     }
     public function expedientes(){
         return $this->hasMany('App\Expediente');
     }
     public function camillas(){
         return $this->hasMany('App\Camilla');
     }
     public function salas(){
         return $this->hasMany('App\Sala');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function bitacora(){
         return $this->belongsTo('App\Bitacora');
     }
}
