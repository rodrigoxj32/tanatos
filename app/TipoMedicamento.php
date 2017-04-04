<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMedicamento extends Model
{
    protected $table = 'tipomedicamento';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombretipomedicamento',
        'descripciontipomedicamento',
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
     public function medicamento(){
         return $this->belongsTo('App\Medicamento');
     }
}
