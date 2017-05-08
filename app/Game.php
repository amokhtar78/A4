<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {

    public function developer() {
        # Game belongs to Developer
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Developer');
    }

    public function genres() {
        return $this->belongsToMany('App\Genre')->withTimestamps();
    }

}
