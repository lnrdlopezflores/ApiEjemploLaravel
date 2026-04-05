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
       Schema::create('asignaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docente_id')->nullable()->constrained('usuarios')->onDelete('cascade');
            $table->foreignId('materia_id')->nullable()->constrained('materias')->onDelete('cascade');
            $table->foreignId('grupo_id')->nullable()->constrained('grupos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaciones');
    }
};
