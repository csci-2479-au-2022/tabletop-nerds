<?php

namespace Tests\Feature;

use App\Models\Game;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mockery\MockInterface;


//arrange
//act
//assert

class gameControllerTest extends TestCase{

    private array $games;
    // private MockInterface $gameServiceSpy;


    protected function setUp(): void
    {
        parent::setUp();
        // $this->gameServiceSpy = $this->spy(GameService::class);
    }

    public function test_get_games_returns_ok()
    {

        //GET /games returns a list of games successfully
        // $this->gameServiceSpy->shouldReceive('getGames')
        // ->times(1)
        // ->andReturn($games);


        $response = $this->get('/games');
        // $response->assertViewHas('/games', $games);
        $response->assertStatus(200);

    }


    //GET /games/{id} returns an item by id successfully
    public function test_get_games_by_id_returns_ok()
    {
        // $this->gameServiceSpy->shouldReceive('getGameById')
        // ->times(1)
        // ->andReturn($game);

        $response = $this->get('/game/{id}');
        // $response->assertViewHas('/game/{id}', $game);
        $response->assertStatus(200);

        //GET /games/{id} where ID does not exist returns a 404
    }

    public function test_get_games_by_id_returns_404()
    {
        $response = $this->get('/game/{id}');
        // $response->assertViewHas('/game/{id}', $game);
        $response->assertStatus(404);
    }


}
