<?php

namespace Tests\Feature;

use App\Services\AccountService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Mockery\MockInterface;
use Tests\TestCase;


class AccountControllerTest extends TestCase
{
    private array $wishlist;
    private MockInterface $accountServiceSpy;

    protected function setUp(): void {
        parent::setUp();
        $this->accountServiceSpy = $this->spy(AccountService::class);
    }

    //arrange
    public function test_return_wishlist() {
        $wishlist =
        [
            ['title'=>'Clue'],
            ['title'=>'Battleship'],
            ['title'=>'Mr. Bacons Big Adventure Board Game'],
        ];

        $this->accountServiceSpy->shouldReceive('getWishlistByUserId')
        ->once()
        ->andReturn($wishlist);

        //act
        $response = $this->get('/wishlist');

        //assert
        $response->assertStatus(200);
        $response->assertViewHas('wishlist', $wishlist);
    }

    public function test_toggle_wishlist() {

        //arrange
        $userId = 1;
        $gameId = 1;
        $isOnWishlist = null;

        $this->accountServiceSpy->shouldReceive('toggleWishlist')->once()->andReturn($gameId, $userId);

        //act
        $response = $this->get('/game/1');

        //assert
        $response->assertStatus(200);
        $response->assertViewHasAll(['game', 'isOnWishlist']);
    }


}
