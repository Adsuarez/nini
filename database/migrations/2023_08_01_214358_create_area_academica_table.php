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
        Schema::create('area_academica', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedInteger('codigo_programa');
            $table->foreign('codigo_programa')->references('codigo_programa')->on('programa_formativo')->onDelete('cascade');
            $table->unsignedInteger('codigo_area')->unique();
            $table->string('nombre_area', 100)->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_academica');
    }
};
