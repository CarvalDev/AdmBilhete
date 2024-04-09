<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cartao_passageiros', function (Blueprint $table) {
            $table->id();
            $table->string('nomeTitularCartao');
            $table->string('cpfTitularCartao');
            $table->string('numeroCartao');
            $table->string('bandeiraCartao');
            $table->string('bancoCartao');
            $table->string('cvcCartao');
            $table->string('contaCartao');
            $table->string('agenciaCartao');
            $table->string('validadeCartao');
            $table->foreignId('passageiro_id')->constrained('passageiros');

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
        Schema::dropIfExists('cartao_passageiros');
    }
};
