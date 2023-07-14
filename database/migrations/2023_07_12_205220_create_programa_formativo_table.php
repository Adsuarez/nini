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
            $table->increments('id_programa');
            $table->timestamps();
            $table->string('nombre', 200)->unique();
            $table->string('descripcion', 2000);
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
