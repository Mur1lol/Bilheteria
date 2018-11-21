<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCronogramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cronogramas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dia');
            $table->time('saida');
            $table->string('trajeto');
            $table->string('tipo');

            $table->unsignedInteger('temporada_id');
            $table->foreign('temporada_id')
                  ->references('id')
                  ->on('temporadas');

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
        Schema::dropIfExists('cronogramas');
    }
}
