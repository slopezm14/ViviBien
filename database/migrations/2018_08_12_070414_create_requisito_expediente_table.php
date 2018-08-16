<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitoExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_expediente_requisitos', function (Blueprint $table) {
            $table->increments('id_expediente_requisito');

            $table->integer('id_expediente')->unsigned()->index();
            $table->foreign('id_expediente')->references('id_expediente')->on('tb_expediente');

            $table->integer('id_usuario')->unsigned()->index();
            $table->foreign('id_usuario')->references('id')->on('users');
            
            $table->integer('id_requisito')->unsigned()->index();
            $table->foreign('id_requisito')->references('id_requisito')->on('tb_requisitos');

            $table->integer('id_solicitante')->unsigned()->index()->nullable();
            $table->foreign('id_solicitante')->references('id_solicitante')->on('tb_info_personas_invo');

            $table->date('fecha_presentacion');
            $table->string('estatus',1);
            $table->string('observaciones',200);
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
        Schema::dropIfExists('tb_expediente_requisitos');
    }
}
