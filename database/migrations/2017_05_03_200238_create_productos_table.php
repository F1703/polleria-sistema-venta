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
						$table->float('stock');
						$table->float('stockminimo');
						$table->integer('categoria_id')->unsigned();
						$table->integer('producto_descripcion_id')->unsigned();

						$table->foreign('producto_descripcion_id')->references('id')->on('producto_descripcions')->ondelete('cascade');
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
