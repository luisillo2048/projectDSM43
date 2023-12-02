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
        Schema::create('sitio', function (Blueprint $table) {
            $table->id('id_sitio');
            $table->string('nombre');
            $table->string('telefono');
            $table->timestamps();
            $table->unsignedBigInteger('id_categoria1');
            $table->foreign('id_categoria1')->references('id_categoria')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitio');
    }
};