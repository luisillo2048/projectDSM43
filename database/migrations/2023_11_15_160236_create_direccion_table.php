<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('direccion', function (Blueprint $table) {
            $table->id('id_direccion');
            $table->string('calle');
            $table->integer('num');
            $table->unsignedBigInteger('id_municipio1');
            $table->string('colonia');
            $table->unsignedBigInteger('id_estado1');
            $table->unsignedBigInteger('id_sitio1');
            $table->foreign('id_estado1')->references('id_estado')->on('estado');
            $table->foreign('id_municipio1')->references('id_municipio')->on('municipio');
            $table->foreign('id_sitio1')->references('id_sitio')->on('sitio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direccion');
    }
};
