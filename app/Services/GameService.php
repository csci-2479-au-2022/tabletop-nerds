<?php

namespace App\Services;
use App\Models\Game;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GameService {

    function getGamesById (int $id)
    {
        $games = $this->getGames();

        foreach ($games as $game) {
            if ($game->id === $id) {
                return $game;
            }
        }
        throw new NotFoundHttpException();
    }

    // todo: add optional params for orderBy, direction, and limit
    function getGames()
    {
        return
            [
                new Game (1, 'Monopoly', 1, 12),
                new Game (2, 'Risk', 2, 10),
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
