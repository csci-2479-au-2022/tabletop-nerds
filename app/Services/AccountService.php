<?php

namespace App\Services;

use App\Http\Controllers\AccountController;
use App\Models\Wishlist;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\Log;


class AccountService
{

    private function getWishlist():array
    {
        return
        [
            ['title'=>'Catan'],
            ['title'=>'Risk'],
            ['title'=>'Ticket to Ride']
        ];
    }

    public function getWishlistByUserId(int $id):array {

        return $this->getWishlist();
    }

    public function toggleWishlist(int $gameId, int $userId): array {

        //establish user & game
        $user = User::find($userId);
        $game = Game::find($gameId);

        //toggle user/game wishlist relationship
        $user->games()->toggle([$gameId]);

        $isOnWishlist = $game->users->contains(fn ($user) => $user->id === $userId);

        return [
            'game' => $game,
            'isOnWishlist' => $isOnWishlist,
        ];

    }

}
