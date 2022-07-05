<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio', function (Blueprint $table) {
            $table->bigIncrements('idServicio');
            $table->string('nomServicio');
            $table->string('descripcion');
            $table->dateTime('fechaServicio', 0);
            $table->dateTime('horaInicio', 0);
            $table->dateTime('horaFin', 0);
            $table->string('direccion');
            $table->string('numeroCli');
            $table->string('estatus');
            $table->string('formaPago');
            $table->unsignedBigInteger('idUsuario');
            $table->unsignedBigInteger('idStripper');
            $table->foreign('idUsuario')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('idStripper')->references('idStripper')->on('stripper')->onDelete('cascade');
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
        Schema::dropIfExists('servicio');
    }
};
