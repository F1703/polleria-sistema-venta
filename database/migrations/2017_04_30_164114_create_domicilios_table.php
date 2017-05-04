<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatedomiciliosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('domicilios', function(Blueprint $table) {
            $table->increments('id');
						$table->string('direccion',20);
						$table->string('numero');
            $table->string('barrio',20);
						$table->integer('localidad_id')->unsigned();

						$table->foreign('localidad_id')->references('id')->on('localidads')->ondelete('cascade');
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
		Schema::drop('domicilios');
	}

}
