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
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Genre')->withTimestamps();
    }

    public function granks() {
        # With timetsamps() will ensure the pivot table has its created_at/updated_at fields automatically maintained
        return $this->belongsToMany('App\Grank')->withTimestamps();
    }

    public function gameScore() {
        $gameRank = $this->granks->sum('score');
        $rankCount = 2*$this->granks->count('score');
        $scorePct = ($gameRank / $rankCount)*100 ;
        return round($scorePct);
    }

}
