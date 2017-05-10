<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        $this->call(DevelopersTableSeeder::class);
        $this->call(GranksTableSeeder::class);
        $this->call(GenresTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(GameGenreTableSeeder::class);
        $this->call(GameGrankTableSeeder::class);
    }

}
