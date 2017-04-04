<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnostico extends Model
{
    protected $table = 'diagnostico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'descripciondiagnostico',
        /*FK*/
        'idconsultamedica',
        'idenfermedad',
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
     public function enfermedades(){
         return $this->hasMany('App\Enfermedad');
     }

     /**
     * RETORNO DE RELACIONES
     *
     */
     public function tratamiento(){
         return $this->belongsTo('App\Tratamiento');
     }
}
