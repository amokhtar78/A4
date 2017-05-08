<?php

use Illuminate\Database\Seeder;
use App\Game;

class GamesTableSeeder extends Seeder {
    public function run() {
        Game::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Super Mario Bros',
            'developer_id' => 1,
            'published' => 1985,
        ]);

        Game::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Sonic the Hedgehog',
            'developer_id' => 2,
            'published' => 1991,
        ]);

        Game::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'FIFA',
            'developer_id' => 5,
            'published' => 1993,
        ]);
        Game::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'The Elder Scrolls',
            'developer_id' => 4,
            'published' => 1994,
        ]);
        Game::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Assassin\'s Creed',
            'developer_id' => 3,
            'published' => 2007,
        ]);
    }

}
