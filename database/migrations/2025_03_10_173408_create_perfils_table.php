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
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
            $table->string('bio')->nullable();
            $table->text('biografia')->nullable();
            $table->string('linkImgCover')->nullable();
            $table->string('linkImg')->nullable();

            $table->json('sociais')->nullable();

            $table->boolean('tipoUser')->nullable();
            
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->softDeletes(); //lixeira
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfils');
    }
};
