<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use App\Services\AccountService;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class AccountController extends Controller
{
    public function __construct(private AccountService $accountService) {

    }

    public function show(?int $id=null){

        return view('wishlist', ['wishlist'=>$this->accountService->getWishlistByUserId(1)]);


    }

}
