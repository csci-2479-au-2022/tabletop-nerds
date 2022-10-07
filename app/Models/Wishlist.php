<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'title'
    ];

    public function toString(): string
    {
        return "Welcome to your wishlist! Hopefully you get $this->title";
    }
}
