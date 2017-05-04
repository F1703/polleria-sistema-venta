<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatelineaVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('linea_ventas', function(Blueprint $table) {
            $table->increments('id');
						$table->float('cantidad');
            $table->float('subtotal');
						$table->integer('venta_id')->unsigned();
						$table->integer('producto_id')->unsigned();

						$table->foreign('venta_id')->references('id')->on('ventas')->ondelete('cascade');
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
		Schema::drop('linea_ventas');
	}

}
