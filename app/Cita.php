<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'cita';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'duracion',
        'fechacreacion',
        'fechacita',
        /*FK*/
        'idconsultamedica',
        'idexpediente',
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
     public function consultasMedicas(){
         return $this->hasMany('App\ConsultaMedica');
     }
     public function expedientes(){
         return $this->hasMany('App\Expediente');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function signoVital(){
         return $this->belongsTo('App\SignoVital');
     }
}
