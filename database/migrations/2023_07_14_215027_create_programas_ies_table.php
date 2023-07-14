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
        Schema::create('programas_ies', function (Blueprint $table) {
            $table->unsignedInteger('id_programa');
            $table->foreign('id_programa')->references('id_programa')->on('programa_formativo')->onDelete('cascade');
            $table->unsignedInteger('id_ies');
            $table->foreign('id_ies')->references('id_ies')->on('ies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programas_ies');
    }
};
