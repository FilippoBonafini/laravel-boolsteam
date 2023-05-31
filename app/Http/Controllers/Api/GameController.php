<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index() {
        $games = Game::with(['genres', 'developer', 'platforms'])->get();
        return response()->json([
            'succes' => true,
            'results' => $games
        ]);
    }
}
