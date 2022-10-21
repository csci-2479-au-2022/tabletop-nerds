<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function wishlist() 
    {
        return view('wishlist', ['games' => self::getWishlist()]);
    }

    private function getWishlist() 
    {
        return 
        [
            ['title'=>'Catan'],
            ['title'=>'Risk'],
            ['title'=>'Ticket to Ride'],
        ];
    }
}
