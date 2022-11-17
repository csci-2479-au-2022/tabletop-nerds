<?php

namespace App\Services;

use App\Http\Controllers\AccountController;
use App\Models\Game;
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

    // public function toggleWishlist(int $id): Game
    // {
    //     $petToAdopt = $this->getGameById($id);
    //     $petToAdopt->is_adopted = !$petToAdopt->is_adopted;
    //     $petToAdopt->save();

    //     return $petToAdopt;
    // }

}
