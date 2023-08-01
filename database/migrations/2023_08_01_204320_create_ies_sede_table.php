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
            $table->unsignedInteger('codigo-institucion');
            $table->foreign('codigo-institucion')->references('codigo-institucion')->on('ies_padre')->onDelete('cascade');
            $table->unsignedInteger('codigo-departamento');
            $table->foreign('codigo-departamento')->references('codigo-departamento')->on('departamento')->onDelete('cascade');
            $table->unsignedInteger('codigo-ciudad');
            $table->foreign('codigo-ciudad')->references('codigo-ciudad')->on('ciudad')->onDelete('cascade');
            $table->increments('codigo-sede')->unique();
            $table->string('nombre-sede', 100);
            $table->string('direccion-sede', 200);
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
