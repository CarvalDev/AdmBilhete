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
        Schema::create('bilhetes', function (Blueprint $table) {
            $table->id();
            $table->string('qrCodeBilhete');
            $table->string('numBilhete');
            $table->string('tipoBilhete');
            $table->boolean('gratuidadeBilhete');
            $table->boolean('meiaPassagensBilhete');
            $table->string('statusBilhete');
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
        Schema::dropIfExists('bilhetes');
    }
};
