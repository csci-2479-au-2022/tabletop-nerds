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
        $user = 1;
        $game = 1;

        $this->accountServiceSpy->shouldReceive('toggleWishlist')->once()->andReturn($user, $game);

        //act
        $response = $this->get('/game/{id}');

        //assert
        $response->assertStatus(200);
        $response->assertViewHas($user, $game);
    }


}
