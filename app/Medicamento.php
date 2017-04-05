<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'medicamento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'codigomedicamento',
        'nombremedicamento',
        'viaadministracion',
        'concentracion',
        'formafarmaceutica',
        'observacion',
        'preciomedicamento',
        /*FK*/
        'idtipomedicamento',
        'idtratamiento',
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
     /*public function tipoMedicamentos(){
         return $this->hasMany('App\TipoMedicamento');
     }*/

     public function tipoMedicamentos(){
         return $this->belongsTo('App\TipoMedicamento');
     }

     public function tratamientos(){
         return $this->hasMany('App\Tratamiento');
     }
}
