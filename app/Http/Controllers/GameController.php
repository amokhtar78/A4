<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Developer;
use App\Genre;


class GameController extends Controller {

    public function index() {
        $games = Game::all();
        return view('games.index')->with(['games' => $games]);
    }
 /**
    * GET
    * /books/{title?}
    */
    public function show($title) {
        return view('games.show')->with(['title' => $title]);
    }
   

}
