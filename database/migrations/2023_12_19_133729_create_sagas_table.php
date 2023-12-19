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
        Schema::create('sagas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->unsignedBigInteger('filme_id');
            $table->unsignedBigInteger('tipo_grupo_id');
            $table->timestamps();

            $table->foreign('filme_id')->references('id')->on('filmes');
            $table->foreign("tipo_grupo_id")->references('id')->on('tipo_grupos');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sagas');
    }
};
