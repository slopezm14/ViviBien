<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_requisitos', function (Blueprint $table) {
            $table->increments('id_requisito');
            $table->integer('id_tipo_ingreso')->unsigned()->index();
            $table->foreign('id_tipo_ingreso')->references('id_tipo_ingreso')->on('tb_tipo_ingreso');
            $table->string('descripcion_requisito',200);
            $table->string('observaciones',500);
            $table->string('obligatorio',1);
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
        Schema::dropIfExists('tb_requisitos');
    }
}
