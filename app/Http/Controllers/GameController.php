<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Team;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::with(['homeTeam', 'awayTeam'])->orderBy('match_date')->get();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        $teams = Team::all();
        return view('games.create', compact('teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'home_team_id' => 'required|exists:teams,id',
            'away_team_id' => 'required|exists:teams,id|different:home_team_id',
            'match_date'   => 'required|date',
        ]);

        Game::create($request->all());

        return redirect()->route('games.index')
                        ->with('success', 'Partido creado correctamente');
    }

    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        $teams = Team::all();
        return view('games.edit', compact('game', 'teams'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'home_team_id' => 'required|exists:teams,id',
            'away_team_id' => 'required|exists:teams,id|different:home_team_id',
            'match_date'   => 'required|date',
            'home_score'   => 'nullable|integer|min:0',
            'away_score'   => 'nullable|integer|min:0',
            'status'       => 'required|in:programado,jugado,cancelado',
        ]);

        $game->update($request->all());

        return redirect()->route('games.index')
                        ->with('success', 'Partido actualizado correctamente');
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('games.index')
                        ->with('success', 'Partido eliminado correctamente');
    }
}