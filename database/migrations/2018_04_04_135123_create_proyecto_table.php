<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('proyecto');
        Schema::create('proyecto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_proyecto',50);
            $table->integer('numero_proyecto');
            $table->integer('region');
            $table->string('localidad',60);
            $table->string('direccion');
            $table->string('nombre_constructora',60);
            $table->string('cargo',30);
            $table->string('telefono',12);
            $table->string('email',50);
            $table->string('fecha_inicio',10);
            $table->string('fecha_fin',10);
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
        Schema::dropIfExists('proyecto');
    }
}
