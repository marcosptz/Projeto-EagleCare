<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('pessoa_id');
            // $table->unsignedBigInteger('remedio_id');
            $table->string('horario');
            $table->timestamps();

            // $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('CASCADE');
            // $table->foreign('remedio_id')->references('id')->on('remedios')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
