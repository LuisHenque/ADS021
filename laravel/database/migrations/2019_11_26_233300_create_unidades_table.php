<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->String('dono');
            $table->String('numero');
            $table->String('email');
            $table->String('situacao');
            $table->bigInteger('morador_id')->unsigned();
            $table->foreign('morador_id')->references('id')->on('moradores');
            $table->bigInteger('condominios_id')->unsigned()->nullable();
            $table->foreign('condominios_id')->references('id')->on('condominios');
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
        Schema::dropIfExists('unidades');
    }
}
