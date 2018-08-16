<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformacioninvoluCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_info_personas_invo', function (Blueprint $table) {
            $table->increments('id_solicitante');
            $table->integer('id_relacion_familiar')->unsigned()->index()->nullable();
            $table->foreign('id_relacion_familiar')->references('id_relacion_familiar')->on('tb_cat_relacion_familiar');
            $table->integer('id_generos')->unsigned()->index()->nullable();
            $table->foreign('id_generos')->references('id_generos')->on('tb_generos');
            $table->string('numero_documento',15);
            $table->string('numero_telefono',8);
            $table->string('nombre1',25);
            $table->string('nombre2',25);
            $table->string('apellido1',25);
            $table->string('apellido2',25);
            $table->string('apellidoCasada',25);
            $table->date('fecha_nacimiento');
            $table->string('direccion',100);
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
        Schema::dropIfExists('tb_info_personas_invo');
    }
}
