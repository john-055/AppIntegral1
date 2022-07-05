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
        Schema::create('stripper', function (Blueprint $table) {
            $table->bigIncrements('idStripper');
            $table->string('descripcion');
            $table->float('precio');
            $table->string('correo');
            $table->string('telefono');
            $table->unsignedBigInteger('idFoto');
            $table->unsignedBigInteger('idUsuario');
            $table->foreign('idUsuario')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('idFoto')->references('idFoto')->on('foto')->onDelete('cascade');
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
        Schema::dropIfExists('stripper');
    }
};
