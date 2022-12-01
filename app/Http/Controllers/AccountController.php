<?php

namespace App\Http\Controllers;

use App\Services\AccountService;

class AccountController extends Controller
{
    public function __construct(private AccountService $accountService) {

    }

    public function show(){
        // $this->$id = auth()->user()->id;
        // if (is_int($id))
        return view('wishlist', ['wishlist'=>$this->accountService->getWishlistByUserId()]);
    }
}
