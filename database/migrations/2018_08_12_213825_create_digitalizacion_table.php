<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDigitalizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_digitalizacion', function (Blueprint $table) {
            $table->increments('id_digitalizacion');

            $table->integer('id_expediente_requisito')->unsigned()->index()->nullable();
            $table->foreign('id_expediente_requisito')->references('id_expediente_requisito')->on('tb_expediente_requisitos');

            $table->integer('id_expediente')->unsigned()->index()->nullable();
            $table->foreign('id_expediente')->references('id_expediente')->on('tb_expediente');

            $table->integer('id_solicitante')->unsigned()->index()->nullable();
            $table->foreign('id_solicitante')->references('id_solicitante')->on('tb_info_personas_invo');

            $table->integer('id_usuario')->unsigned()->index();
            $table->foreign('id_usuario')->references('id')->on('users');

            $table->date('fecha_presentacion');
            $table->string('aceptado',1);
            $table->string('motivo_rechazo',1);
            $table->string('path',400);


            

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
        Schema::dropIfExists('tb_digitalizacion');
    }
}
