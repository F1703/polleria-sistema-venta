<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_descripcion extends Model
{

	protected $table = 'Producto_descripcions';
    protected $fillable = ['preciocompra','precioventa','vencimiento','producto_id'];

    public function producto(){
    	return $this->belongsTo('App\Producto');
    }
}
