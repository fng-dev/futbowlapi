<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisparosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disparos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('fechahora_inicio');
            $table->dateTime('fechahora_final');
            $table->integer('coordenada_x');
            $table->integer('coordenada_y');
            $table->integer('puntaje');
            $table->string('video', 100);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('partida_id');
            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('partida_id')->references('id')->on('partidas')->onDelete('cascade');
            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('cascade');
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
        Schema::dropIfExists('disparos');
    }
}
