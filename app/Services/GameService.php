<?php

namespace App\Services;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameService
{
    public function getGamesWithFilters(Request $request)
    {
        $query = Game::query();

        if ($request->has('genre')) {
            $query->where('genre', 'like', "%{$request->genre}%");
        }
        if ($request->has('platform')) {
            $query->where('platform', 'like', "%{$request->platform}%");
        }
        if ($request->has('title')) {
            $query->where('title', 'like', "%{$request->title}%");
        }

        return $query->paginate(10);
    }

    public function storeGame(array $data)
    {
        if (isset($data['cover_image'])) {
            $data['cover_image'] = $data['cover_image']->store('images', 'public');
        }

        return Game::create($data);
    }

    public function updateGame(Game $game, array $data)
    {
        if (isset($data['cover_image'])) {
            Storage::disk('public')->delete($game->cover_image);
            $data['cover_image'] = $data['cover_image']->store('images', 'public');
        }

        $game->update($data);
    }

    public function deleteGame(Game $game): void
    {
        Storage::disk('public')->delete($game->cover_image);
        $game->delete();
    }
}
