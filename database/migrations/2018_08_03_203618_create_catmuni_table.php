<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatmuniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cat_municipios', function (Blueprint $table) {
            $table->increments('id_municipio');
            $table->integer('id_departamento')->unsigned()->index()->nullable();
            $table->foreign('id_departamento')->references('id_departamento')->on('tb_cat_departamento');
            $table->string('descripcion_municipio', 100)->unique();
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
        Schema::dropIfExists('tb_cat_municipios');
    }
}
