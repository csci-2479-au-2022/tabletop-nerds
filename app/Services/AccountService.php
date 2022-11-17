<?php

namespace App\Services;

use App\Http\Controllers\AccountController;
use App\Models\Wishlist;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

    public function toggleWishlist(int $gameId, $userId): Wishlist {
        $usersWishlist = $this->getWishlistByUserId($id);



    }

}
