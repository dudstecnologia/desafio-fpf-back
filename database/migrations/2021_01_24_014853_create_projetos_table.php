<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('data_inicio', 10);
            $table->string('data_termino', 10);
            $table->bigInteger('valor');
            $table->enum('risco', [0, 1, 2]);
            $table->bigInteger('investimento');
            $table->bigInteger('retorno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
