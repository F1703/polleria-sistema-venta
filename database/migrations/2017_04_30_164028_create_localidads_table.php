<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatelocalidadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localidads', function(Blueprint $table) {
            $table->increments('id');
            $table->string('localidad');
						$table->integer('idprovincia')->unsigned();

						$table->foreign('idprovincia')->references('id')->on('provincias')->ondelete('cascade');
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
		Schema::drop('localidads');
	}

}
