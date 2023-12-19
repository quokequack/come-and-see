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
        Schema::create('filmes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->longText('sinopse');
            $table->string('diretor');
            $table->string('ano');
            $table->unsignedBigInteger('nacionalidade_id');
            $table->unsignedBigInteger('genero_id');
            $table->string('duracao');
            $table->boolean('remake');
            $table->timestamps();

            $table->foreign('nacionalidade_id')->references('id')->on('nacionalidades');
            $table->foreign('genero_id')->references('id')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes');
    }
};
