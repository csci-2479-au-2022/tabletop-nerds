<?php

namespace App\Services;
use App\Models\Wishlist;
use App\Models\User;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AccountService
{

    private function getWishlist(): Collection
    {
        // WTF DO I PUT HERE????????????????
        return Wishlist::all();
    }

    public function getWishlistByUserId(int $user_id): Collection
    {
        $this->$user_id = Auth::user()->user_id; // LOL what am i even doing here? trying to plug logged in user ID to the method..
        return $this->getWishlist();
    }

}
