<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
# routes to enter the application
Route::get('/', 'GameController@index');
Route::get('/games', 'GameController@index');

# routes to process the form to add a new game
Route::get('/games/new', 'GameController@createNewGame');
Route::post('/games/new', 'GameController@storeNewGame');

# routes to process the form to edit a new game
Route::get('/games/edit/{id}', 'GameController@edit');
Route::post('/games/edit', 'GameController@saveEdits');

#routes to confirm deletion of game
Route::get('/games/delete/{id}', 'GameController@confirmDeletion');
Route::post('/games/delete', 'GameController@delete');
