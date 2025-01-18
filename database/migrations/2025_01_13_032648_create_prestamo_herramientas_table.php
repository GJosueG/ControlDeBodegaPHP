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
        Schema::create('prestamo_herramientas', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_devolucion')->nullable();
            $table->foreignId('prestamo_id')->constrained('prestamos');
            $table->foreignId('herramienta_id')->constrained('herramientas_en_bodega');
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
        Schema::dropIfExists('prestamo_herramientas');
    }
};
