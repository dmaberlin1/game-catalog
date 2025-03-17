<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Services\GameService;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected GameService $gameService;

    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }

    public function index(Request $request)
    {
        $games = $this->gameService->getGamesWithFilters($request);
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'developer' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'release_date' => 'required|date',
            'platform' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'cover_image' => 'nullable|image|max:2048'
        ]);

        $this->gameService->storeGame($validated);
        return redirect()->route('games.index')->with('success', 'Игра добавлена!');
    }

    public function edit(Game $game)
    {
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, Game $game): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'developer' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'release_date' => 'required|date',
            'platform' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'cover_image' => 'nullable|image|max:2048'
        ]);

        $this->gameService->updateGame($game, $validated);
        return redirect()->route('games.index')->with('success', 'Игра обновлена!');
    }

    public function destroy(Game $game)
    {
        $this->gameService->deleteGame($game);
        return redirect()->route('games.index')->with('success', 'Игра удалена!');
    }
}
