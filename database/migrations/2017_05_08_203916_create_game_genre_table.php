<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameGenreTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('game_genre', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();

            # `game_id` and `genre_id` will be foreign keys, so they have to be unsigned
            #  Note how the field names here correspond to the tables they will connect...
            # `game_id` will reference the `games table` and `genre_id` will reference the `genres` table.
            $table->integer('game_id')->unsigned();
            $table->integer('genre_id')->unsigned();

            # Make foreign keys
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    public function down() {
        Schema::drop('game_genre');
    }

}
