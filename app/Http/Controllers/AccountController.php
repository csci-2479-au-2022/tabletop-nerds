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

    public function toggleWishlist(Request $request, int $gameId) {
        $userId = (int)$request->query('user');


        return response()->json($this->accountService->toggleWishlist($gameId, $userId));
    }
}
