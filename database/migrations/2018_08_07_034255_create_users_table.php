<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->integer('id_rol')->unsigned()->index()->nullable();
            $table->foreign('id_rol')->references('id_rol')->on('tb_roles');
            $table->integer('id_unidad_trabajo')->unsigned()->index()->nullable();
            $table->foreign('id_unidad_trabajo')->references('id_unidad_trabajo')->on('tb_unidad_trabajo');
            $table->integer('id_generos')->unsigned()->index()->nullable();
            $table->foreign('id_generos')->references('id_generos')->on('tb_generos');
            $table->string('name',25);
            $table->string('nombre2',25);
            $table->string('apellido1',25);
            $table->string('apellido2',25);
            $table->string('estatus',1);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
