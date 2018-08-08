<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacoraaudiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_bitacora_auditoria', function (Blueprint $table) {
            $table->increments('id_bitacora');
            $table->integer('id_usuario')->unsigned()->index();
            $table->foreign('id_usuario')->references('id_usuario')->on('tb_usuarios');
            $table->string('objeto',100);
            $table->string('dato_anterior',200);
            $table->string('nuevo_dato',200);
            $table->date('fecha_accion');
            $table->string('direccionIP',20);
            $table->string('nombre_computadora',20);
            $table->integer('id_accion')->unsigned()->index();
            $table->foreign('id_accion')->references('id_accion')->on('tb_tipoaccion');
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
        Schema::dropIfExists('tb_bitacora_auditoria');
    }
}
