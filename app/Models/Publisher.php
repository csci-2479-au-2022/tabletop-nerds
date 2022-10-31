<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * Get the Publisher
     */
    public function __construct()
    {

    }

    public function game() {
        return $this->hasMany(Game::class);
    }
}
