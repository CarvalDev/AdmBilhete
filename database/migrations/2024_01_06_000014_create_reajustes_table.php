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
        Schema::create('reajustes', function (Blueprint $table) {
            $table->id();
            $table->date('dataReajuste');
            $table->float('precoPassagemReajuste');
            $table->float('precoMeiaPassagemReajuste');
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
        Schema::dropIfExists('reajustes');
    }
};
