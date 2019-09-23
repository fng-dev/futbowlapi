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
            $table->bigIncrements('id');
            $table->string('nombre', 45);
            $table->string('apelido', 45);
            $table->string('alias', 45);
            $table->string('foto', 45);
            $table->string('rut', 45);
            $table->string('email', 45);
            $table->string('password');
            $table->integer('puntaje')->default(0);
            $table->integer('cantidad_prox_nivel')->default(1000);
            $table->integer('facebook_id')->nullable();
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->unsignedBigInteger('comuna_id');
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
            $table->foreign('comuna_id')->references('id')->on('comunas')->onDelete('cascade');
            $table->foreign('nivel_id')->references('id')->on('niveles')->onDelete('cascade');
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
