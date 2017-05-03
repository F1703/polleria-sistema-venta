<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLiquidacionConceptoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liquidacion_concepto', function (Blueprint $table) {
            $table->increments('id');
            // $table->float('monto');
            // $table->float('descuento');
            // $table->float('subtotal');
            $table->integer('liquidacion_id')->unsigned();
            $table->integer('concepto_id')->unsigned();

            $table->foreign('liquidacion_id')->references('id')->on('liquidacions')->ondelete('cascade');
            $table->foreign('concepto_id')->references('id')->on('conceptos')->ondelete('cascade');
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
        Schema::drop('liquidacion_concepto');
    }
}
