<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use App\Services\GameService;

class GameController extends Controller
{
    public function __construct( private GameService $gameService)
    {
    }
    public function gameList(){
        return view('game-list', [
            'games'=>$this->gameService->getGames()
        ]);
    }

    public function getGameById(?int $id = null) {
            return view ('game-info', [ 'game'=>$this->gameService->getGamesById($id)]);
    }
}
