<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model {
    public function developer() {
		# Book belongs to Author
		# Define an inverse one-to-many relationship.
		return $this->belongsTo('App\Developer');
	}

    /*
      public function genres() {
      return $this->belongsToMany('App\Genre')->withTimestamps();
      }
     */
}
