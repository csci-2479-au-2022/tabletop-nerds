<?php

namespace Tests\Feature;

use App\Services\AccountService;
use Illuminate\Support\Collection;
use Mockery\MockInterface;
use Tests\TestCase;


class AccountControllerTest extends TestCase
{
    private Collection $wishlist;
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

        $this->accountServiceSpy->shouldReceive('getWishlistByUserId()')
        ->once()
        ->andReturn($wishlist);

        //act
        $response = $this->get('/wishlist');

        //assert
        $response->assertStatus(200);
        $response->assertViewHas('wishlist', $wishlist);
    }

}
