<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuentum extends Model
{
    //



    public function cliente(){
    	return $this->belongsTo('App\cliente');
    }
    public function transaccion(){
    	return $this->hasMany('App\Transaccion');
    }
}
