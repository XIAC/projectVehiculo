<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    //
    protected $fillable = [
        'id', 'modelo', 'descripcion','precio','estado','usuario_id'
    ];
    public $timestamps=false;

    public function vehiculo(){
        return $this->morphTo();
    }
}
