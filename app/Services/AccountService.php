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

    public function getWishlistByUserId(int $id): Collection
    {
        $this->$id = auth()->user()->id; // Is this redundant since I'm doing the same thing in the AccountController??
        return $this->getWishlist();
    }

}
