<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpedienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_expediente', function (Blueprint $table) {
            $table->increments('id_expediente');
            
            $table->integer('anio_expediente')->default(\Carbon\Carbon::now()->year);
            $table->integer('numero_expediente')->unsigned();

            $table->integer('id_usuario')->unsigned()->index();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->integer('id_tipo_ingreso')->unsigned()->index();
            $table->foreign('id_tipo_ingreso')->references('id_tipo_ingreso')->on('tb_tipo_ingreso');
            $table->integer('id_tipo_solicitud_subsidio')->unsigned()->index();
            $table->foreign('id_tipo_solicitud_subsidio')->references('id_tipo_solicitud_subsidio')->on('tb_cat_destino_subsidio');
            $table->integer('id_proyecto')->unsigned()->index();
            $table->foreign('id_proyecto')->references('id_proyecto')->on('tb_cat_proyectos');

            $table->date('fecha_registro');
            $table->string('observaciones_expediente',200);
            $table->decimal('monto_solicitado', 8, 2);
            $table->string('status',1);
                        
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
        Schema::dropIfExists('tb_expediente');
    }
}
