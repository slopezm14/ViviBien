<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cat_proyectos', function (Blueprint $table) {
            $table->increments('id_proyecto');
            $table->integer('id_municipio')->unsigned()->index()->nullable();
            $table->foreign('id_municipio')->references('id_municipio')->on('tb_cat_municipios');
            $table->integer('id_desarrollador')->unsigned()->index()->nullable();
            $table->foreign('id_desarrollador')->references('id_desarrollador')->on('tb_desarrolladores');
            $table->integer('id_departamento')->unsigned()->index()->nullable();
            $table->foreign('id_departamento')->references('id_departamento')->on('tb_cat_departamento');
            $table->string('nombre_proyecto',200);
            $table->float('longitud_proyecto', 8, 2);
            $table->float('latitud_proyecto', 8, 2);
            $table->decimal('monto_aproximado_proyecto', 8, 2);
            $table->date('fecha_inicio_trabajo');
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
        Schema::dropIfExists('tb_cat_proyectos');
    }
}
