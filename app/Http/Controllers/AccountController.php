<?php

namespace App\Http\Controllers;

use App\Services\AccountService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct(private AccountService $accountService) {

    }

    public function show(){
        return view('wishlist',
        ['wishlist'=>$this->accountService->getWishlistByUserId(),
        'shouldRemove' => 'true',
        ]);
    }

    public function toggleWishlist(Request $request, int $gameId) {
        $userId = (int)$request->query('user');


        return response()->json($this->accountService->toggleWishlist($gameId, $userId));
    }
}
