<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Wishlist extends Pivot
{
    protected $fillable = [
        'id',
        'title'
    ];

    public function toString(): string
    {
        return "Welcome to your wishlist! Hopefully you get $this->title";
    }

    public function GameUser()
    {
        return $this->belongsToMany(game_user_table::class);
    }
}
