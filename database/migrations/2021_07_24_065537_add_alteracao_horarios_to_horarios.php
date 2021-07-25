<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAlteracaoHorariosToHorarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('horarios', function (Blueprint $table) {
            $table->unsignedBigInteger('pessoa_id');
            $table->unsignedBigInteger('remedio_id');

            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('CASCADE');
            $table->foreign('remedio_id')->references('id')->on('remedios')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horarios', function (Blueprint $table) {
            //
        });
    }
}
