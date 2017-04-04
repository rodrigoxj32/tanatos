<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nombres',
        'apellidos',
        'genero',
        'fechanacimiento',
        'detalledireccion',
        'telefono',
        'telefonoresponsable',
        'apellidocasado',
        'email',
        /*FK*/
        'idestadocivil',
        'idrol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];
    /**
    * Eliminar timestamps del modelo
    */
    public $timestamps = false;
    /**
     * RELACIONES
     *
     */
     public function estadosCiviles(){
         return $this->hasMany('App\EstadoCivil');
     }
     public function roles(){
         return $this->hasMany('App\Rol');
     }
     
    /**
     * RETORNO DE RELACIONES
     *
     */
     public function expediente(){
         return $this->belongsTo('App\Expediente');
     }
     public function permiso(){
         return $this->belongsTo('App\Permisos');
     }
}
