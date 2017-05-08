<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {

    public function developer() {
        return $this->belongsTo('App\Developer');
    }

    public function genres() {
             return $this->belongsToMany('App\Genre')->withTimestamps();
    }

}
