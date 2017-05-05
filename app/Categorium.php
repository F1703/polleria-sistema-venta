<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorium extends Model
{
<<<<<<< HEAD
    //
    protected $table = "categorias";
    public function producto(){
      return $this->hasMany('App\Producto');
=======

	protected $table = 'categorias';
    protected $fillable = ['categoria']; 

    public function producto(){
 		return $this->belongsTo('App\Prodcuto');
>>>>>>> c3a73ad7d6ac39c1a87049d5ba88f67d9bfc342e
    }
}
