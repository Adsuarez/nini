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
        Schema::create('ies_padre', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedInteger('codigo-institucion')->unique();
            $table->string('nombre-institucion', 100)->unique();
            $table->string('siglas-institucion', 30);
            $table->string('logo-institucion', 50)->unique();
            $table->unsignedInteger('costo-inscripcion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ies_padre');
    }
};
