<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('comment_likes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('comment_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            
            // Garante que um usuário só pode curtir um comentário uma vez
            $table->unique(['user_id', 'comment_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('comment_likes');
    }
}; 