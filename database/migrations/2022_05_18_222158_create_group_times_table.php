<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_times', function (Blueprint $table) {
            $table->id();
            $table->string('hora_lunes',11);
            $table->string('hora_martes',11);
            $table->string('hora_miercoles',11);
            $table->string('hora_jueves',11);
            $table->string('hora_viernes',11);

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
        Schema::dropIfExists('group_times');
    }
};
