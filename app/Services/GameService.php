<?php

namespace App\Services;

use App\Models\Wishlist;

function getGamesById(int $id): Wishlist {
    $games = $this->getGames();

    foreach ($games as $game) {
        if ($game->id === $id) {
            return $game;
        }
    }
}

function getGames ($orderBy, $direction, $limit) {

}

function searchGamesByTitle(string $title) {
$games = $this->getGames();

foreach ($games as $game) {
    if (strtolower($game->title) === strtolower($title)) {
        $foundTitle = $title;
        break;
    }
}
}
