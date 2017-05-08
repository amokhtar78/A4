<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Developer;
use App\Genre;
use Session;

class GameController extends Controller {

    public function index() {
        $games = Game::orderBy('published')->get();
        return view('games.index')->with(['games' => $games]);
    }

    public function createNewGame(Request $request) {
        $developersForDropdown = Developer::developersForDropdown();
        return view('games.new')->with([
                    'developersForDropdown' => $developersForDropdown
        ]);
    }

    /**
     * POST
     * /games/new
     * Process the form for adding a new game
     */
    public function storeNewGame(Request $request) {

        $title = $request->input('title');

        $this->validate($request, [
            'title' => 'required|min:1',
            'published' => 'required|numeric',
            'developer_id' => 'not_in:0',
        ]);

        $game = new Game();
        $game->title = $request->title;
        $game->published = $request->published;
        $game->developer_id = $request->developer_id;
        $game->save();

        Session::flash('message', 'The Game ' . $request->title . ' was added.');

        return redirect('/games');
    }

    /**
     * GET
     * /games/edit/{id}
     * Show form to edit a game
     */
    public function edit($id) {
        $game = Game::find($id);

        $developersForDropdown = Developer::developersForDropdown();

        if (is_null($game)) {
            Session::flash('message', 'The game you requested was not found.');
            return redirect('/games');
        }

        return view('games.edit')->with([
                    'id' => $id,
                    'game' => $game,
                    'developersForDropdown' => $developersForDropdown
        ]);
    }

    /**
     * POST
     * /games/edit
     * Process form to save edits to a game
     */
    public function saveEdits(Request $request) {

        $this->validate($request, [
            'title' => 'required|min:1',
            'published' => 'required|numeric',
        ]);

        $game = Game::find($request->id);
        $game->title = $request->title;
        $game->published = $request->published;
        $game->developer_id = $request->developer_id;
        $game->save();

        Session::flash('message', 'The Game ' . $request->title . ' was edited.');

        return redirect('/games/edit/' . $request->id);
    }

}
