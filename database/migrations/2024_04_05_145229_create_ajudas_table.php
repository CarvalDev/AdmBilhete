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
        Schema::create('ajudas', function (Blueprint $table) {
            $table->id();
            $table->string('tituloAjuda', 100);
            $table->string('caminhoAjuda');
            $table->string('descAjuda');
            $table->string('statusAjuda');
            $table->foreignId('categoriaAjuda_id')->constrained('categoria_ajudas');
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
        Schema::dropIfExists('ajudas');
    }
};
