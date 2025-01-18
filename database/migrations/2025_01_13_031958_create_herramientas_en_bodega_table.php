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
        Schema::create('herramientas_en_bodega', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_en_bodega');
            $table->string('estado_de_uso');
            $table->foreignId('herramienta_id')->constrained('catalogo_herramientas'); 
            $table->foreignId('disponibilidad_id')->constrained('disponibilidad_herramientas'); 
            $table->foreignId('estado_id')
            ->default(1)
            ->constrained('estados');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herramientas_en_bodega');
    }
};
