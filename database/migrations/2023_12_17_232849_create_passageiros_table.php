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
        Schema::create('passageiros', function (Blueprint $table) {
            $table->id();
            $table->string('nomePassageiro');
            $table->date('dataNascPassageiro');
            $table->string('generoPassageiro');
            $table->string('cpfPassageiro')->unique();
            $table->string('numTelPassageiro')->unique();
            $table->string('logrPassageiro');
            $table->string('numLogrPassageiro');
            $table->string('complementoLogrPassageiro');
            $table->string('ufPassageiro');
            $table->string('bairroPassageiro');
            $table->string('cepPassageiro');
            $table->string('fotoPassageiro');
            $table->string('emailPassageiro')->unique();
            $table->string('senhaPassageiro');
            $table->rememberToken();
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
        Schema::dropIfExists('passageiros');
    }
};
