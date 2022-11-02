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
                Game::make(['id' => 1, 'title' => 'Monopoly', 'rating' => 1]),
                Game::make(['id' => 2, 'title' => 'Risk', 'rating' => 2]),
                Game::make([ 'id' => 3, 'title' => 'DND', 'rating' => 5]),
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
