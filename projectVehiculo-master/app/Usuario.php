<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'id', 'nombre', 'nombre_usuario','contrasenia','correo'
    ];
    //
    public $timestamps=false;

    public function vehiculos()
    {
        return $this->hasMany('App\Vehiculo', 'usuario_id');
    }
}
