<?php

namespace App\Services;
use App\Models\Wishlist;

class GameService {
    function getGamesById (int $id): Wishlist
    {
        $games = $this->getGames();

        foreach ($games as $game) {
            if ($game->id === $id) {
                return $game;
            }
        }
    }

    function getGames(): array
    {
        $orderBy = '';
        $direction = '';
        $limit = 666;

        return [
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



