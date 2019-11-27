<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMoradores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moradores', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nome');
            $table->String('cpf');
            $table->String('email');
            $table->String('telefone');
            $table->String('placa');
            $table->String('veiculo');
            $table->String('situacao');
//            $table->bigInteger('unidade_id')->unsigned();
//            $table->foreign('unidade_id')->references('id')->on('unidades');
////            $table->bigInteger('condominios_id')->unsigned()->nullable();
//            $table->bigInteger('condominios_id')->unsigned();
//            $table->foreign('condominios_id')->references('id')->on('condominios');
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
        Schema::dropIfExists('moradores');
    }
}
