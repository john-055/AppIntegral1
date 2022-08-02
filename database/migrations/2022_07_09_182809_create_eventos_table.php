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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->text('descripcion');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->dateTime('timeStrart');
            $table->dateTime('timeEnd');
            $table->string('direccion',255);
            $table->string('numeroCli',100);
            $table->string('estatus',10);
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
        Schema::dropIfExists('eventos');
    }
};
