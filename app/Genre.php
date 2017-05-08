<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

    public function games() {
        return $this->belongsToMany('App\Game')->withTimestamps();
    }

    public static function getGenresForCheckboxes() {

        $genres = Genre::orderBy('name', 'ASC')->get();

        $genresForCheckboxes = [];

        foreach ($genres as $genre) {
            $genresForCheckboxes[$genre['id']] = $genre->name;
        }

        return $genresForCheckboxes;
    }

}
