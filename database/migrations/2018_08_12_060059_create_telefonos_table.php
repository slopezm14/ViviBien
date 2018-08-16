<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_telefonos', function (Blueprint $table) {
            $table->increments('id_telefono');
            $table->string('numero_telefono',8);
            $table->integer('id_desarrollador')->unsigned()->index();
            $table->foreign('id_desarrollador')->references('id_desarrollador')->on('tb_desarrolladores');
            $table->integer('id_tipotelefono')->unsigned()->index();
            $table->foreign('id_tipotelefono')->references('id_tipotelefono')->on('tb_tipos_telefonos');
            $table->integer('id_solicitante')->unsigned()->index();
            $table->foreign('id_solicitante')->references('id_solicitante')->on('tb_info_personas_invo');
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
        Schema::dropIfExists('tb_telefonos');
    }
}
