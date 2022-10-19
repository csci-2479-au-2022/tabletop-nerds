<?php

namespace App\Services;

use App\Http\Controllers\AccountController;


class AccountService
{
    public function getWishlistByUserId($id) {
        $ac = new AccountController;
        return $ac->wishlist();
    }

}
