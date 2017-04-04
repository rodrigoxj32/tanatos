<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $table = 'expediente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        /*FK*/
        'idhistorialclinico',
        'idhospital',
        'idusuario'
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
     public function historialesClinicos(){
         return $this->hasMany('App\HistorialClinico');
     }
     public function hospitales(){
         return $this->hasMany('App\Hospital');
     }
     public function usuarios(){
         return $this->hasMany('App\User');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function cita(){
         return $this->belongsTo('App\Cita');
     }
     public function ingreso(){
         return $this->belongsTo('App\Ingreso');
     }
}
