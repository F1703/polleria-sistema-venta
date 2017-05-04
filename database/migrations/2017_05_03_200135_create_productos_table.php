<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateproductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table) {
            $table->increments('id');
						$table->string('codigo');
            $table->string('descripcion');
					  $table->enum('tipo',['unidad','kilo']);
						$table->float('stok');
						$table->float('stok_min');
						$table->integer('categoria_id')->unsigned();

						$table->foreign('categoria_id')->references('id')->on('categorias')->ondelete('cascade');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
