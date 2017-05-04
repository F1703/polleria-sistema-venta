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
            $table->string('turno',20);
						$table->string('nombre',20);
						$table->string('apellido',20);
						$table->string('dni',10);
						$table->string('cuil',11);
						$table->date('fechanacimiento');
						$table->string('email',45)->unique();
						$table->string('telefono',13);
						$table->enum('sexo',['masculino','femenino','otro']);
						$table->string('cargo',20);
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
		Schema::drop('empleados');
	}

}
