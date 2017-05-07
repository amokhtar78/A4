<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder {

    use App\Genre;
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
