<?php

namespace App\Services;
use App\Models\Game;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GameService {

    function getGamesById (int $id)
    {
        $games = Game::find($id);

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
        $allGames = Game::all('id', 'title', 'rating', 'age', );
        $sortedAllGames = $allGames->sortBy('title');

        return $sortedAllGames;

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
