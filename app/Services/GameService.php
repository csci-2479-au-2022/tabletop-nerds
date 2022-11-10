<?php

namespace App\Services;
use App\Models\Game;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Mockery;
use Mockery\MockInterface;



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

        echo $games;
        // $games = Game::factory()->make();
        return $games;

    }

    function searchGamesByTitle (string $searchTitle)
    {
        $titleName = null;
        $titleName = Game::where('title','LIKE',$searchTitle)->get();


        return $titleName;


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
