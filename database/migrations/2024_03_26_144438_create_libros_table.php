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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->engine='InnoDB';

            $table->foreignId('id_categoria')
                  ->nullable()
                  ->constrained('categorias')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            $table->foreignId('id_reseña')
                  ->nullable()
                  ->constrained('reseñas')
                  ->cascadeOnUpdate()
                  ->nullOnDelete();
            
            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
