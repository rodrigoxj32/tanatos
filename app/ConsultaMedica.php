<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsultaMedica extends Model
{
    protected $table = 'consultamedica';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'fechaconsulta',
        'descripcionsintomas',
        'sintomatologia',
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
     
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function cita(){
         return $this->belongsTo('App\Cita');
     }
     public function diagnostico(){
         return $this->belongsTo('App\Diagnostico');
     }
     public function examenClinico(){
         return $this->belongsTo('App\ExamenClinico');
     }
     public function examenFisico(){
         return $this->belongsTo('App\ExamenFisico');
     }
}
