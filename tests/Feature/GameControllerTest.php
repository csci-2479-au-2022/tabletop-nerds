<?php

namespace Tests\Feature;

use App\Models\Game;
use App\Models\Publisher;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


//arrange
//act
//assert

class GameControllerTest extends TestCase
{
    use RefreshDatabase;

    private array $games;

    protected function setUp(): void
    {
        parent::setUp();

        // create parent publisher record
        $publisher = Publisher::factory(1)->create()->first();

        // create game records
        Game::factory()->createMany([
            [
                'id' => 1,
                'publisher_id' => $publisher->id,
            ],
            [
                'id' => 2,
                'publisher_id' => $publisher->id,
            ],
            [
                'id' => 3,
                'publisher_id' => $publisher->id,
            ],
        ]);
    }

    public function test_get_games_returns_ok()
    {
        $response = $this->get('/games');
        $response->assertStatus(200);
    }

    public function test_get_games_by_id_returns_ok()
    {
        $response = $this->get('/game/1');
        $response->assertStatus(200);
    }

    public function test_get_games_by_id_returns_404()
    {
        $response = $this->get('/game/4');
        $response->assertStatus(404);
    }
}
