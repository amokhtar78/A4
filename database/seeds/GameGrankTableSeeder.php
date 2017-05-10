<?php

use Illuminate\Database\Seeder;
use App\Game;
use App\Genre;

class GameGrankTableSeeder extends Seeder {

    public function run() {
        DB::table('game_grank')->insert([
            'game_id' => 1,
            'grank_id' => 3,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 1,
            'grank_id' => 3,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 2,
            'grank_id' => 2,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 2,
            'grank_id' => 2,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 3,
            'grank_id' => 1,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 3,
            'grank_id' => 1,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 4,
            'grank_id' => 3,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 4,
            'grank_id' => 2,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 5,
            'grank_id' => 2,
        ]);
        DB::table('game_grank')->insert([
            'game_id' => 5,
            'grank_id' => 1,
        ]);
    }

}
