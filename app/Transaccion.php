<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    protected $table = 'transaccions';
    protected $fillable = ['pago','vuelto','cuenta_id'];

    public function Cuenta(){
    	return $this->belongsTo('App\Cuentum');
    }
}
