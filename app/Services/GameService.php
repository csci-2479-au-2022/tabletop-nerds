<?php

namespace App\Services;

class GameService {
    public function __construct( private GameService $gameService)
    {
    }

    function getGamesById (?int $id = null)
    {
        $games = $this->gameService->getGames();

        foreach ($games as $game) {
            if ($game->id === $id) {
                return $game;
            }
            return view('games', ['games'=>$this->gameService->getGamesById($id)]);
        }

    }

    function getGames(): array
    {
        $orderBy;
        $direction;
        $limit;
        return view('game-list', [
            'games'=>$this->gameService->getGames(),
            [
                ['title'=>'Monopoly'],
                ['title'=>'Risk'],
                ['title'=>'D&D'],
            ]
        ]);
    }

    function searchGamesByTitle (string $searchTitle)
    {
        $titleName = null;
        $games = $this->getGames();

        foreach ($games as $game) {
            if (strtolower($game->title) === strtolower($searchTitle)) {
                $titleName = $game;
                break;
             }

             if ($titleName === null) {
                echo 'error';
             }
             return view('game-info', ['game'=>$this->gameService->searchGamesByTitle()]);
            }
        return view('games', ['games'->$this->gameService->getGames()]);
    }

}



