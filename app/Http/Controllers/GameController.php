<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GameController extends Controller
{
    public function gameList(?int $id = null)
    {
        return view('game-list', [
            'games'=>$this->getGames(),
        ]);
    }


    private function getGames(): array
    {
        return [
            new Game(1, 'Monopoly', 5.0, '8+'),
            new Game(2, 'Risk', 6.0, '10+'),
            new Game(3, 'DND', 9.0, '12+'),
        ];
    }

    public function getGameById(int $id): Game
    {
        $games = $this->getGames();

        foreach ($games as $game) {
            if($game->id ===$id){
                return view ('game-details', [
                    'game'=>$game(),
                ]);

            }
        }
        throw new NotFoundHttpException();
    }

}
