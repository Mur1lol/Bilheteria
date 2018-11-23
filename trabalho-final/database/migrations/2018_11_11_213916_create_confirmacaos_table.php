<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfirmacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confirmacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');

            $table->unsignedInteger('cronograma_id');
            $table->foreign('cronograma_id')
                  ->references('id')
                  ->on('cronogramas');

            $table->timestamps();

            $table->unsignedInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('confirmacaos');
    }
}
