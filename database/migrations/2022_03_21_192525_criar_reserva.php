<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarReserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('reserva');
            $table->string('reservaInicio');
            $table->string('reservaFim');
            $table->unsignedBigInteger('livro_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('livro_id')->references('id')->on('livros');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
