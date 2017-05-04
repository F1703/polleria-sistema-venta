<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatetransaccionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaccions', function(Blueprint $table) {
            $table->increments('id');
            $table->float('pago');
						$table->float('vuelto');
						$table->integer('cuenta_id')->unsigned();
						
						$table->foreign('cuenta_id')->references('id')->on('cuentas')->ondelete('cascade');
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
		Schema::drop('transaccions');
	}

}
