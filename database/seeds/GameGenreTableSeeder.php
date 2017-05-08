<?php

use Illuminate\Database\Seeder;
use App\Game;
use App\Genre;

class GameGenreTableSeeder extends Seeder {

    public function run() {
        DB::table('game_genre')->insert([
            'game_id' => 1,
            'genre_id' => 1,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 1,
            'genre_id' => 2,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 1,
            'genre_id' => 3,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 2,
            'genre_id' => 1,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 2,
            'genre_id' => 2,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 2,
            'genre_id' => 3,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 3,
            'genre_id' => 5,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 3,
            'genre_id' => 7,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 4,
            'genre_id' => 3,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 4,
            'genre_id' => 4,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 5,
            'genre_id' => 1,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 5,
            'genre_id' => 2,
        ]);
        DB::table('game_genre')->insert([
            'game_id' => 5,
            'genre_id' => 3,
        ]);
    }

}
