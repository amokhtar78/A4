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
        $genresForCheckboxes = Genre::getGenresForCheckboxes();
        return view('games.new')->with([
                    'developersForDropdown' => $developersForDropdown,
                    'genresForCheckbox' => $genresForCheckboxes,
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

        # Now handle genres.
        # Note how the game has to be created (save) first *before* genres can
        # be added; this is because the genres need a game_id to associate with
        # and we don't have a game_id until the game is created.
        $genres = ($request->genres) ? : [];
        $game->genres()->sync($genres);
        $game->save();

        Session::flash('message', 'The Game ' . $request->title . ' was added.');

        return redirect('/games');
    }

    /**
     * GET
     * /games/edit/{id}
     * Show form to edit a game
     */
    public function edit($id = null) {
        $game = Game::with('genres')->find($id);

        $developersForDropdown = Developer::developersForDropdown();

        $genresForCheckboxes = Genre::getGenresForCheckboxes();
        # Create a simple array of just the genre names for genres associated with this Game;
        # will be used in the view to decide which genres should be checked off
        $genresForThisGame = [];
        foreach ($game->genres as $genre) {
            $genresForThisGame[] = $genre->name;
        }

        if (is_null($game)) {
            Session::flash('message', 'The game you requested was not found.');
            return redirect('/games');
        }

        return view('games.edit')->with([
                    'id' => $id,
                    'game' => $game,
                    'developersForDropdown' => $developersForDropdown,
                    'genresForCheckbox' => $genresForCheckboxes,
                    'genresForThisGame' => $genresForThisGame,
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

        # If there were genres selected...
        if ($request->genres) {
            $genres = $request->genres;
        }
        # If there were no genres selected (i.e. no genres in the request)
        # default to an empty array of genres
        else {
            $genres = [];
        }

        # Above if/else could be condensed down to this: $genres = ($request->genres) ?: [];
        # Sync genres
        $game->genres()->sync($genres);
        $game->save();

        Session::flash('message', 'The Game ' . $request->title . ' was edited.');

        return redirect('/games/edit/' . $request->id);
    }

    /**
     * GET
     * Page to confirm deletion
     */
    public function confirmDeletion($id) {
        # Get the game they're attempting to delete
        $game = Game::find($id);
        if (!$game) {
            Session::flash('message', 'Game not found.');
            return redirect('/games');
        }
        return view('games.delete')->with('game', $game);
    }

    /**
     * POST
     * Actually delete the game
     */
    public function delete(Request $request) {
        # Get the game to be deleted
        $game = Game::find($request->id);
        if (!$game) {
            Session::flash('message', 'Deletion failed; game not found.');
            return redirect('/games');
        }
        $game->genres()->detach();
        $game->delete();
        # Finish
        Session::flash('message', $game->title . ' was deleted.');
        return redirect('/games');
    }

}
