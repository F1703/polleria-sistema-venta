<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidads';
    protected $fillable = ['localidad','provincia_id'];

    public function provincia(){
      return $this->belongsTo('App\Provincium');
    }

    public function scopeSearch($query,$idprovincia){
      return $query->where('idprovincia','=',$idprovincia);
    }
    public function domicilio(){
    	return $this->hasMany('App\Domicilio');
    }
}
