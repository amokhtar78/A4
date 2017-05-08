<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    public function games() {
		# Author has many Books
		# Define a one-to-many relationship.
		return $this->hasMany('App\Game');
	}
}
