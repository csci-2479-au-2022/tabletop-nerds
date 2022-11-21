<?php

namespace App\Services;

use App\Http\Controllers\AccountController;
use App\Models\Wishlist;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\User;
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

    public function toggleWishlist(int $gameId, int $userId):Wishlist {
        $user = User::find($userId);


        $userToToggle = $this->getWishlistByUserId($id);
        $userToToggle->isOnWishlist = !$userToToggle->isOnWishlist;

        if ($userToToggle-->isOnWishlist) {
            $userToToggle->user()->associate($user);
        } else {
            $userToToggle->disassociate();
        }

        $userToToggle->save();

        return $userToToggle;



    }

}
