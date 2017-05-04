<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatelineaComprasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('linea_compras', function(Blueprint $table) {
            $table->increments('id');
						$table->float('cantidad');
            $table->float('subtotal');
						$table->integer('producto_id')->unsigned();
						$table->integer('compra_id')->unsigned();

						$table->foreign('producto_id')->references('id')->on('productos')->ondelete('cascade');
						$table->foreign('compra_id')->references('id')->on('compras')->ondelete('cascade');
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
		Schema::drop('linea_compras');
	}

}
