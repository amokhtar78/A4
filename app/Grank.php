<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grank extends Model {

    public function games() {
        # function make the realtion between Game Ranks and Games (many to many)
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Game')->withTimestamps();
    }

    public static function granksForDropdown() {
        # Get all the granks
        $granks = Grank::orderBy('name', 'ASC')->get();

        # Organize the granks into an array where the key = grank id and value = grank name
        $granksForDropdown = [];
        foreach ($granks as $grank) {
            $granksForDropdown[$grank->id] = $grank->name;
        }
        return $granksForDropdown;
    }

}
