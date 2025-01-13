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
        Schema::create('salida_herramientas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha');
            $table->string('justificacion');
            $table->foreignId('herramienta_id')->constrained('herramientas_en_bodega');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salida_herramientas');
    }
};
