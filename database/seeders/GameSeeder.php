<?php

namespace Database\Seeders;

use App\Models\Developer;
use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // PRENDIAMO IL FILE 'games.php'
        // $games = config('games');

        // Schema::disableForeignKeyConstraints();
        // Game::truncate();
        // Schema::enableForeignKeyConstraints();

        // // RIPETIAMO QUESTA OPERAZIONE PER OGNI CAMPO DELL'ARRAY CONTENUTO NEL FILE 
        // foreach ($games as $game) {
        //     // CREIAMO UN NUOVO RECORD PRENDENDO LE INFORMAZIONI DEL FILE 
        //     $developers = Developer::inRandomOrder()->first();

        //     $newGame = new Game();
        //     $newGame->developers_id = $developers->id;
        //     $newGame->title = $game['title'];
        //     // $newGame->genres = implode(',', $game['genres']);
        //     $newGame->release_year = $game['release_year'];
        //     $newGame->description = $game['description'];
        //     // $newGame->developer = $game['developer'];
        //     // $newGame->platforms = implode(',', $game['platforms']);
        //     $newGame->crossplay = $game['crossplay'];
        //     // $newGame->languages = implode(',', $game['languages']);
        //     $newGame->online = $game['online'];
        //     $newGame->price = $game['price'];


        //     $newGame->save();
        // }
    }
}
