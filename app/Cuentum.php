<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuentum extends Model
{
    //
	protected $table = 'cuentas';
	protected $fillable = ['saldo','cliente_id'];


    public function cliente(){
    	return $this->belongsTo('App\cliente');
    }
    public function transaccion(){
    	return $this->hasMany('App\Transaccion');
    }
}
