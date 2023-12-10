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
        Schema::create('prova_questao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prova_id')->references('id')->on('prova');
            $table->foreignId('questao_id')->references('id')->on('questao');
            $table->foreignId('resposta_escolhida_id')->references('id')->on('resposta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prova_questao');
    }
};
