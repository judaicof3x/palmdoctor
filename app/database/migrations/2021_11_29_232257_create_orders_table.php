<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            // Referencias para os pedidos
            $table->unsignedBigInteger('user_id'); // de usuário
            $table->unsignedBigInteger('plan_id'); // de plano
            $table->integer('ipag_id'); // da iPag

            // Informações do pedido
            $table->boolean('type'); // 0:adesão ou 1:assinatura
            $table->string('status'); // Status do pagamento
            $table->string('starting_at'); // Primeira cobrança
            $table->string('expires_at')->nullable(); // Última cobrança
            $table->string('method'); // Pode ser cartão, pix, boleto

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
