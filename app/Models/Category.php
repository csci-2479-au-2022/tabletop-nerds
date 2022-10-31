<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the Category
     */
    public function __construct()
    {

    }

    public function game() {
        return $this->belongsToMany(Game::class);
    }
}
