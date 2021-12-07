<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nome do plano
            $table->string('url')->unique(); // URL do plano (gerada automaticamente pelo Observer)
            $table->string('description')->nullable(); // Descrição curta do plano
            $table->integer('dependent')->nullable(); // Quantidade de pessoas
            $table->double('entry', 10, 2); // Valor da adesão do plano
            $table->double('amount', 10, 2); // Valor da mensalidade do plano
            $table->integer('frequency')->default(1); // Frequencia de cobrança
            $table->string('interval')->default('month'); // Intervalo da cobrança
            $table->boolean('is_active')->default(1); // Se o plano está ativo para vendas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
