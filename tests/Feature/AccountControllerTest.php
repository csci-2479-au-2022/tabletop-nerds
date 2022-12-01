<?php

namespace Tests\Feature;

use App\Models\Game;
use App\Models\User;
use App\Services\AccountService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\MockInterface;
use Tests\TestCase;


class AccountControllerTest extends TestCase
{
    use RefreshDatabase;

    private array $wishlist;
    private MockInterface $accountServiceSpy;

    protected function setUp(): void {
        parent::setUp();
        $this->accountServiceSpy = $this->spy(AccountService::class);
    }

    //arrange
    public function test_return_wishlist() {
        $wishlist = collect([
            ['title'=>'Clue'],
            ['title'=>'Battleship'],
            ['title'=>'Mr. Bacons Big Adventure Board Game'],
        ]);

        /**
         * @var User
         * see https://laravel.com/docs/9.x/http-tests#session-and-authentication
         */
        $user = User::factory()->create();

        $this->accountServiceSpy->shouldReceive('getWishlistByUserId')
        ->once()
        ->andReturn($wishlist);

        //act
        $response = $this->actingAs($user)->get('/wishlist');

        //assert
        $response->assertStatus(200);
        $response->assertViewHas('wishlist', $wishlist);
    }

    public function test_toggle_wishlist() {

        //arrange
        $game = Game::factory()->make(['title' => 'Scrabble']);

        $this->accountServiceSpy->shouldReceive('toggleWishlist')->once()->andReturn([
            'game' => $game,
            'isOnWishlist' => true,
        ]);

        //act
        $response = $this->getJson('/api/game/1');

        //assert
        $response
            ->assertStatus(200)
            ->assertJson(['game' => $game->toArray(), 'isOnWishlist' => true]);
    }


}
