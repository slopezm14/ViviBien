<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesarrolladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_desarrolladores', function (Blueprint $table) {
            $table->increments('id_desarrollador');
            $table->string('nombre_desarrollador', 200);
            $table->string('nit', 20);
            $table->string('direccion_empresa', 200);
            $table->string('correo_electronico', 20);
            $table->string('nombre_owner', 100);
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
        Schema::dropIfExists('tb_desarrolladores');
    }
}
