<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $games = config('games');

        foreach($games as $game){
            $newGame = new Game();

            $newGame->title = $game['title'];
            $newGame->genres = implode(',',$game['genres']);
            $newGame->release_year = $game['release_year'];
            $newGame->description = $game['description'];
            $newGame->developer = $game['developer'];
            $newGame->platforms = implode(',',$game['platforms']);
            $newGame->crossplay = $game['crossplay'];
            $newGame->languages = implode(',',$game['languages']);
            $newGame->online = $game['online'];
            $newGame->price = $game['price'];
            $newGame->cover = $game['cover'];

            $newGame->save();
        }
    }
}
