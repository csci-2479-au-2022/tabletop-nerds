<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class AccountController extends Controller
{
    public function __construct(private AccountService $accountService) {

    }

    public function show(?int $id=null){
        $this->$id = auth()->user()->id;
        if (is_int($id))
            return view('wishlist', ['wishlist'=>$this->AccountService->getWishlistByUserId($id)]);
    }
}
