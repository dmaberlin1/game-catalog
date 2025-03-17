<?php

use App\Models\Game;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Game::create([
            'title' => 'The Witcher 3',
            'developer' => 'CD Projekt',
            'genre' => 'RPG',
            'release_date' => '2015-05-19',
            'platform' => 'PC, PS4, Xbox One',
            'price' => 49.99,
            'cover_image' => 'witcher3.jpg'
        ]);
    }
}

