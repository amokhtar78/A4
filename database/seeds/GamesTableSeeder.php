<?php

use Illuminate\Database\Seeder;
use App\Game;

class GamesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
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
            'developer_id' => 3,
            'published' => 1993,
        ]);
    }

}
