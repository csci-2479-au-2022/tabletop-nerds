<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GameService;
use App\Http\Requests\RatingRequest;
use Illuminate\Support\Facades\Log;

class GameController extends Controller
{
    public function __construct( private GameService $gameService)
    {
    }
    public function gameList(){
        return view('game-list', [
            'games' => $this->gameService->getGames(),
        ]);
    }

    public function getGameById(int $id) {
        return view ('game-info', [
            'game' => $this->gameService->getGamesById($id),
            'shouldRemove' => false,
        ]);
    }

    public function displayResults(Request $request) {

        return view('game-list', [
            'games'=>$this->gameService->searchGamesByTitle($request->query('text'))
        ]);
    }

    public function rateGame(RatingRequest $request)
    {
        $rating = $request->validated('rating');
        $review = $request->validated('review');
        $gameId = $request->validated('game');

        //logging saves lives.
        Log::debug('[GameController:rateGame]', ['rating' => $rating, 'review' => $review, 'gameId' => $gameId]);
        $userGameInfo = $this->gameService->rateGame($rating, $gameId);
        //logging returns to save more lives.
        Log::debug('[GameController:rateGame]', ['userGameInfo' => $userGameInfo]);

        return response()->redirectToRoute('game-list');

    }
}
