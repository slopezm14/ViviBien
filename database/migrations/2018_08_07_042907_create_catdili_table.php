<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatdiliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cat_diligencias', function (Blueprint $table) {
            $table->increments('id_diligencia');
            $table->integer('id_unidad_trabajo')->unsigned()->index();
            $table->foreign('id_unidad_trabajo')->references('id_unidad_trabajo')->on('tb_unidad_trabajo');
            $table->string('descripcion_diligencia',200);
            $table->string('obligatoria',1);
            $table->integer('orden');
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
        Schema::dropIfExists('tb_cat_diligencias');
    }
}
