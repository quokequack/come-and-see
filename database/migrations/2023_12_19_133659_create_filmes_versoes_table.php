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
        Schema::create('filmes_versoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('versao_id');
            $table->timestamps();

            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign("versao_id")->references('id')->on('versoes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filmes_versoes');
    }
};
