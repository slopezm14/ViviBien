<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteDiliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_expediente_diligencia', function (Blueprint $table) {
            $table->increments('id_diligencia_expediente');
            $table->integer('id_diligencia')->unsigned()->index()->nullable();
            $table->foreign('id_diligencia')->references('id_diligencia')->on('tb_cat_diligencias');
            $table->integer('id_usuario')->unsigned()->index()->nullable();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->integer('id_expediente')->unsigned()->index()->nullable();
            $table->foreign('id_expediente')->references('id_expediente')->on('tb_expediente');
            $table->date('fecha_diligencia');
            $table->string('resultado_diligencia',500);
            $table->string('diligencia_finalizada',1);
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
        Schema::dropIfExists('tb_expediente_diligencia');
    }
}
