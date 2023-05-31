<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use App\Models\Platform;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ORDINIAMO I GIOCHI IN BASE AL PREZZO
        $games = Game::orderBy('price', 'DESC')
            ->get();
        $platforms = Platform::all();
        //RESTITUIAMO LA VIEW 'games/index'
        return view('admin.games.index', compact('games', 'platforms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platforms = Platform::all();
        return view('admin.games.create', compact('platforms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGameRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGameRequest $request)
    {
        $data = $request->validated();
        //salvo dati in arrivo dal form
        $data = $request->all();

        $newGame = new Game();
        // $newGame->GameName = $data['GameName'];
        // $newGame->GameVote = $data['GameVote'];
        // $newGame->save();

        $newGame->fill($data);

        //applicazione dello sconto al prezzo
        $prezzoScontato = 0;
        if (isset($data['sconto'])) {
            // Calcola il prezzo scontato e assegna il valore a $prezzoScontato
            $prezzoScontato = floor($data['price'] - ($data['price'] * ($data['sconto'] / 100))) + 0.99;
            
            $newGame->discounted_price = $prezzoScontato;
        } else {
            // Nessuno sconto applicato
            $newGame->discounted_price = null;
        }
        dd($prezzoScontato);
        if (isset($data['image'])) {
            $newGame->image = Storage::put('uploads', $data['image']);
        }

        //salvataggio in tabella
        $newGame->save();

        if (isset($data['platforms'])) {
            $newGame->tags()->sync($data['platforms']);
        }
        return to_route('admin.games.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        $platforms = Platform::all();
        return view('admin.games.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGameRequest  $request
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGameRequest $request, Game $game)

    {
        $data = $request->validated();

        if (empty($data['set_image'])) {
            if ($game->image) {
                Storage::delete($game->image);
                $game->image = null;
            }
        } else {
            if (isset($data['image'])) {

                if ($game->image) {
                    Storage::delete($game->image);
                }

                $game->image = Storage::put('uploads', $data['image']);
            }
        }
        $platforms = isset($data['platforms']) ? $data['platforms'] : [];
        $game->platforms()->sync($platforms);

        $game->update($data);
        return redirect()->route('admin.games.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        if ($game->image) {
            Storage::delete($game->image);
        }
        $game->delete();
        return redirect()->route('admin.games.index')->with('message', "'" . $game->title . "'" . ' eliminato con successo');
    }
}
