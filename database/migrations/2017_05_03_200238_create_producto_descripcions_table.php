<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateproductoDescripcionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('producto_descripcions', function(Blueprint $table) {
            $table->increments('id');
						$table->float('preciocompra');
            $table->float('precioventa');
						$table->date('vencimiento');
						$table->integer('producto_id')->unsigned();

						$table->foreign('producto_id')->references('id')->on('productos')->ondelete('cascade');
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
		Schema::drop('producto_descripcions');
	}

}
