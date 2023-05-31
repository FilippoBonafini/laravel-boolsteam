<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //disattiva relazioni
        Schema::disableForeignKeyConstraints();

        //elimina dati
        Game::truncate();

        //riattiva relazioni
        Schema::enableForeignKeyConstraints();

        $genres = [];
        $data = config('games');

        foreach ($data as $game) {
            foreach ($game['genres'] as $genre) {
                if (!in_array($genre, $genres)) {
                    array_push($genres, $genre);
                }
            }
        }
        foreach ($genres as $genre) {

            $new_genre = new Genre();
            $new_genre->name = $genre;
            $new_genre->slug = Str::slug($new_genre->name);
            $new_genre->save();
        }
    }
}
