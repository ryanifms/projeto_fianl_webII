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
        Schema::create('transacoes', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 255); // Campo para a descrição (obrigatório)
            $table->decimal('valor', 10, 2); // Campo para o valor (obrigatório)
            $table->date('data'); // Campo para a data (obrigatório)
            $table->string('tipo', 50); // Campo para o tipo (obrigatório)
            $table->string('categorias', 100); // Campo para as categorias (obrigatório)p
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacoes');
    }
};
