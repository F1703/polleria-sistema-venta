<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateempleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('turno');
						$table->string('nombre');
						$table->string('apellido');
						$table->string('dni');
						$table->string('cuil');
						$table->string('sexo');
						$table->string('cargo');
						$table->string('password');
						$table->integer('iddomicilio')->unsigned();

						$table->foreign('iddomicilio')->references('id')->on('domicilios')->ondelete('cascade');
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
		Schema::drop('empleados');
	}

}
