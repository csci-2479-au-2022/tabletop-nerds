<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Mockery\MockInterface;

class accountControllerTest extends TestCase{

    private array $games;

    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_get_wishlist_returns_ok()
    {
        $response = $this->get('/wishlist');
        $response->assertStatus(200);
    }

    // public function test_get_wishlist_by_id_returns_ok()
    // {
    //     $response = $this->get('/wishlist/{id}');
    //     $response->assertStatus(200);
    // }

    // public function test_get_wishlist_by_id_returns_404()
    // {
    //     $repsonse = $this->get('/wishlsit/4');
    //     $repsonse->assertStatus(404);
    // }


}
