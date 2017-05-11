<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

    public function games() {
        # function make the realtion between Game Genres and Games (many to many)
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Game')->withTimestamps();
    }

    public static function getGenresForCheckboxes() {
        # function makes Genre List array to used for making check boxes
        $genres = Genre::orderBy('name', 'ASC')->get();

        $genresForCheckboxes = [];

        foreach ($genres as $genre) {
            $genresForCheckboxes[$genre['id']] = $genre->name;
        }

        return $genresForCheckboxes;
    }

}
