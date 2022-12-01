<?php

namespace App\Services;
Use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class AccountService
{
    // Commenting this out for now, because I'm not sure it is needed.
    //
    // private function getWishlist(): Collection
    // {
    //     return Wishlist::all();
    // }

    public function getWishlistByUserId(): Collection
    {
        return Auth::user()->games;
    }

}
