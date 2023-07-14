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
        Schema::create('ies', function (Blueprint $table) {
            $table->increments('id_ies');
            $table->timestamps();
            $table->string('nombre', 100)->unique();
            $table->unsignedInteger('id_programa')->nullable();
            $table->foreign('id_programa')->references('id_programa')->on('programa_formativo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ies');
    }
};
