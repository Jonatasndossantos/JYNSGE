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
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            //$table->string('slug', 255);
            $table->string('resumo',500);
            $table->text('conteudo');
            $table->string('linkImg')->nullable();
            //$table->enum('status', ['rascunho', 'publicado', 'arquivado'])->default('rascunho'); // enumeracao. 1, 2, 3
            $table->timestamp('published_at')->nullable();
            $table->timestamps(); //dataCriacao e update da noticia

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->softDeletes(); //lixeira
            // https://albuquerque53.medium.com/entendendo-o-soft-delete-do-laravel-ce097c41214
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
