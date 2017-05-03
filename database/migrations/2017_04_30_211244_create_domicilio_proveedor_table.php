<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomicilioProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilio_proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('domicilio_id')->unsigned();
            $table->integer('proveedor_id')->unsigned();

            $table->foreign('domicilio_id')->references('id')->on('domicilios')->ondelete('cascade');
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
        Schema::drop('domicilio_proveedor');
    }
}
