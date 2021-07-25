<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('remedio_id');
            // $table->unsignedBigInteger('horario_id');
            $table->string('nome');
            $table->string('periodo');
            $table->timestamps();

            // $table->foreign('remedio_id')->references('id')->on('remedios')->onDelete('CASCADE');
            // $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
