<?php

namespace App\Services;
use App\Models\Game;

class GameService {

    function getGamesById (int $id)
    {
        $games = $this->getGames();

        foreach ($games as $game) {
            if ($game->id === $id) {
                return $game;
            }
        }
    }

    function getGames()
    {
        $orderBy;
        $direction;
        $limit;

        return
            [
                new Game (1, 'Monopoly', 5, 12),
                new Game (2, 'Risk', 5, 12),
                new Game (3, 'DND', 5, 12),
            ];
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
        }

    }
}
