<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamenFisico extends Model
{
    protected $table = 'examenfisico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'campoexamenfisico',
        'precioexamenfisico',
        /*FK*/
        'idconsultamedica',
        'idtipoexamenfisico',
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
     public function tipoExamenFisico(){
         return $this->hasMany('App\TipoExamenFisico');
     }
     /**
     * RETORNO DE RELACIONES
     *
     */
     public function audio(){
         return $this->belongsTo('App\Audio');
     }
     public function costoServicio(){
         return $this->belongsTo('App\CostoServicio');
     }
     public function imagen(){
         return $this->belongsTo('App\Imagen');
     }
     public function resultadoExamenFisico(){
         return $this->belongsTo('App\ResultadoExamenFisico');
     }
     public function video(){
         return $this->belongsTo('App\Video');
     }
}
