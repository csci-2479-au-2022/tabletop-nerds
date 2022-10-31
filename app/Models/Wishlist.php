<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'id',
        'title'
    ];

    public function toString(): string
    {
        return "Welcome to your wishlist! Hopefully you get $this->title";
    }

    public function game_user_table()
    {
        return $this->belongsToMany(game_user_table::class);
    }
}
