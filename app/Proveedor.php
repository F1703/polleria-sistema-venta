<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedors';
    protected $fillable = ['nombre','apellido','cuit','email','telefono'];

    public function domicilio(){
      return $this->belongsToMany('App\Domicilio');
    }
    public function compra(){
      return $this->hasMany('App\Compra');
    }

}
