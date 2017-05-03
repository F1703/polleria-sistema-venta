<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateclientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
						$table->string('apellido');
						$table->string('dni')->unique();
						$table->boolean('estado');
						$table->string('email')->unique();
						$table->string('telefono');
						$table->integer('domicilio_id')->unsigned();

						$table->foreign('domicilio_id')->references('id')->on('domicilios')->ondelete('cascade');
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
		Schema::drop('clientes');
	}

}
