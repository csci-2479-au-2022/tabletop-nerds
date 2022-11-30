<?php

namespace App\Services;
use App\Models\Game;
use Mockery;
use Mockery\MockInterface;



class GameService {



    function getGamesById (int $id)
    {
        return Game::findOrFail($id);
    }

    // todo: add optional params for orderBy, direction, and limit
    function getGames()
    {
        return Game::all()->sortBy('title');
    }

    function searchGamesByTitle (string $searchTitle)
    {
        return Game::where('title','LIKE',$searchTitle)->get();
    }

    public function test_mock_gameservice()
    {
        $this->getGames(
            GameService::class,
            Mockery::mock(GameService::class, function (MockInterface $mock) {
                $mock->shouldReceive('GameFactory')->once();
            })
        );
    }

}
