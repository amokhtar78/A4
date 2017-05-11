<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model {

    public function games() {
        # Developer has many Games
        # Define a one-to-many relationship.
        return $this->hasMany('App\Game');
    }

    public static function developersForDropdown() {
        # Get all the developers
        $developers = Developer::orderBy('dev_name', 'ASC')->get();

        # Organize the developers into an array where the key = developer id and value = developer name
        $developersForDropdown = [];
        foreach ($developers as $developer) {
            $developersForDropdown[$developer->id] = $developer->dev_name . ' of ' . $developer->dev_country;
        }
        return $developersForDropdown;
    }

}
