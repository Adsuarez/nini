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
        Schema::create('programa_formativo', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedInteger('codigo-sede');
            $table->foreign('codigo-sede')->references('codigo-sede')->on('ies_sede')->onDelete('cascade');
            $table->unsignedInteger('codigo-programa')->unique();
            $table->string('nombre-programa', 200);
            $table->smallInteger('semestres-programa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programa_formativo');
    }
};
