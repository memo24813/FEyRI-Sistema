<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteFallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_fallas', function (Blueprint $table) {
            $table->id();
            $table->string('equipo');
            $table->string('marca');
            $table->string('modelo');
            $table->string('serie');
            $table->string('inventario');
            $table->string('problema');
            $table->string('solucion');
            $table->string('propietario');

            // $table->unsignedBigInteger('edificio_id');
            // $table->foreign('edificio_id')->references('id')->on('ubicacion_equipo');
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
        Schema::dropIfExists('alta_equipo');
    }
}
