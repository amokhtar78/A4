<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameGrankTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('game_grank', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            $table->integer('game_id')->unsigned();
            $table->integer('grank_id')->unsigned();

            # Make foreign keys
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('grank_id')->references('id')->on('granks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('game_grank');
    }

}
