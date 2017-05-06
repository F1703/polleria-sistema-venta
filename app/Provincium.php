<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincium extends Model
{
    //
    protected $table ="provincias";
    protected $fillable=['codigopostal','descripcion','pais_id'];

    public function pais(){
      return $this->belongsTo('App\Pai');
    }
    public function localidad(){
      return $this->hasMany('App\Localidad');
    }

    public function scopeSearch($query,$idpais){
      return $query->where('idpais','=',$idpais);
    }
}
