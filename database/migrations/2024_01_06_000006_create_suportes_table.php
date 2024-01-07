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
        Schema::create('suportes', function (Blueprint $table) {
            $table->id();
            $table->string('categoriaSuporte');
            $table->text('descSuporte');
            $table->foreignId('acao_id')->constrained('acaos');
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
        Schema::dropIfExists('suportes');
    }
};
