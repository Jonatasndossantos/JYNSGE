<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categoria_noticia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('noticia_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            // Garante que não haverá duplicatas
            $table->unique(['categoria_id', 'noticia_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_noticia');
    }
};
