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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100)->unique(); //unica
            //$table->string('slug', 100)->unique();
            $table->string('descricao', 500)->nullable();
            //$table->string('cor', 20)->default('#3B82F6'); // cor padrão azul tirar
            //$table->boolean('ativo')->default(true); //padrao verdadeiro
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias');
    }
};
