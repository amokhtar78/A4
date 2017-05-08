<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder {

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //
        $genres = ['Action', 'Action-adventure', 'Adventure', 'Role-playing', '	Simulation', 'Strategy', 'Sports'];

        foreach ($genres as $genreName) {
            $genre = new Genre();
            $genre->name = $genreName;
            $genre->save();
        }
    }

}
