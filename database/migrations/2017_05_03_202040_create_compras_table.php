<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatecomprasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compras', function(Blueprint $table) {
            $table->increments('id');
            $table->float('monto');
						$table->date('fechacompra');
						$table->integer('empleado_id')->unsigned();
						$table->integer('proveedor_id')->unsigned();

						$table->foreign('empleado_id')->references('id')->on('empleados')->ondelete('cascade');
						$table->foreign('proveedor_id')->references('id')->on('proveedors')->ondelete('cascade');

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
		Schema::drop('compras');
	}

}
