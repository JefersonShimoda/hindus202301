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
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imobiliaria')->nullable();
            $table->string('titulo')->nullable();
            $table->integer('metros_quadrados')->nullable();
            $table->integer('quartos')->nullable();
            $table->integer('banheiros')->nullable();
            $table->string('endereco')->nullable();
            $table->float('valor')->nullable();
            $table->text('descricao')->nullable();
            $table->string('coordenadas')->nullable();
            $table->string('created_at')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imoveis');
    }
};
