<?php

namespace App\Services;
use App\Models\Game;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class GameService {


    function getGamesById (int $id)
    {
        $game = Game::findOrFail($id);
        return $game;

    }

    // todo: add optional params for orderBy, direction, and limit
    function getGames()
    {
        $games = Game::all()->sortBy('title');

        return $games;

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
