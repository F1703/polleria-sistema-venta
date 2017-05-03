<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincium extends Model
{
    //
    protected $table ="provincias";
    protected $fillable=['descripcion','idpais'];

    public function pais(){
      return $this->belongsToMany('App\Pai');
    }
    public function localidad(){
      return $this->hasMany('App\Localidad');
    }

    public function scopeSearch($query,$idpais){
      return $query->where('idpais','=',$idpais);
    }
}
