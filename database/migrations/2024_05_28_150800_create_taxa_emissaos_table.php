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
        Schema::create('taxa_emissaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pedido_bilhete_id')->constrained('pedido_bilhetes');
            $table->foreignId('taxa_emissao_id')->constrained('taxa_emissaos');
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
        Schema::dropIfExists('taxa_emissaos');
    }
};
