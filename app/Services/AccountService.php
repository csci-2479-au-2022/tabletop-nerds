<?php

namespace App\Services;

use App\Http\Controllers\AccountController;
use App\Models\Wishlist;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\User;
use App\Models\Game;
use Illuminate\Support\Facades\Log;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;


class AccountService {

    public function getWishlistByUserId(): Collection
    {
        return Auth::user()->games;
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
            'is_on_wishlist' => $isOnWishlist,
        ];

    }

}
