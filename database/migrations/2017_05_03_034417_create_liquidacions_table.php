<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateliquidacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('liquidacions', function(Blueprint $table) {
            $table->increments('id');
            $table->float('sueldoneto');
						// $table->date('fechadesde');
						// $table->date('fechahasta');
						// $table->string('periodo');
						// $table->bolean('estado');
						$table->integer('empleado_id')->unsigned();

						$table->foreign('empleado_id')->references('id')->on('empleados')->ondelete();
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
		Schema::drop('liquidacions');
	}

}
