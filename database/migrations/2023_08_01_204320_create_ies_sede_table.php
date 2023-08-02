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
        Schema::create('ies_sede', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedInteger('codigo_institucion');
            $table->foreign('codigo_institucion')->references('codigo_institucion')->on('ies_padre')->onDelete('cascade');
            $table->unsignedInteger('codigo_departamento');
            $table->foreign('codigo_departamento')->references('codigo_departamento')->on('departamento')->onDelete('cascade');
            $table->unsignedInteger('codigo_ciudad');
            $table->foreign('codigo_ciudad')->references('codigo_ciudad')->on('ciudad')->onDelete('cascade');
            $table->increments('codigo_sede')->unique();
            $table->string('nombre_sede', 100);
            $table->string('direccion_sede', 200);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ies_sede');
    }
};
