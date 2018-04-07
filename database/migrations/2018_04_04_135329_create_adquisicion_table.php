<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdquisicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('adquisicion');
        Schema::create('adquisicion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_proyecto',50);
            $table->integer('numero_proyecto');
            $table->integer('region');
            $table->string('localidad',60);
            $table->string('direccion');
            $table->string('nombre_empresa',60);
            $table->timestamps();
            $table->integer('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adquisicion');
    }
}
