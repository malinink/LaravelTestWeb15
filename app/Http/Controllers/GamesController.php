<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateNewGameRequest;
use App\Games;
use App\Http\Controllers\Controller;



class GamesController extends Controller
{

    public function index()
    {
        $games = Games::latest()->get();

        return view("games.index", compact('games'));
    }

    public function create()
    {
        return view("games.create");
    }

    public function store(CreateNewGameRequest $request)
    {
       Games::create($request->all());

       \Session::flash('flash message', 'You added the new game!');

       return redirect('games');
    }

    public function show($id)
    {
        $game = Games::findOrFail($id);
        return view("games.show", compact("game"));
    }

    public function edit($id)
    {
        $game = Games::findOrFail($id);

        return view("games.edit", compact("game"));
    }

    public function update($id, CreateNewGameRequest $request)
    {
        $game = Games::findOrFail($id);

        $game->update($request->all());


        \Session::flash('flash message', 'You updated the game!');

        return redirect('games');
    }

    public function destroy($id)
    {
        $game = Games::findOrFail($id);

        \Session::flash('flash message', 'You deleted the game!');

        $game->delete();
        return redirect('games');
    }

}
