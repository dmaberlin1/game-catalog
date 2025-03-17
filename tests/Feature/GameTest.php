<?php

namespace Tests\Feature;

use App\Models\Game;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GameTest extends TestCase
{
    use RefreshDatabase;

    public function test_create_game(): void
    {
        $data = [
            'title' => 'Cyberpunk 2077',
            'developer' => 'CD Projekt',
            'genre' => 'RPG',
            'release_date' => '2020-12-10',
            'platform' => 'PC',
            'price' => 59.99
        ];

        $response = $this->post(route('games.store'), $data);
        $response->assertRedirect(route('games.index'));
        $this->assertDatabaseHas('games', $data);
    }

    public function test_edit_game()
    {
        $game = Game::factory()->create();
        $data = ['title' => 'Updated Title'];

        $response = $this->put(route('games.update', $game), $data);
        $response->assertRedirect(route('games.index'));
        $this->assertDatabaseHas('games', $data);
    }

    public function test_delete_game()
    {
        $game = Game::factory()->create();

        $response = $this->delete(route('games.destroy', $game));
        $response->assertRedirect(route('games.index'));
        $this->assertDatabaseMissing('games', ['id' => $game->id]);
    }
}
