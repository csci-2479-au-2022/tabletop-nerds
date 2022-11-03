<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * Get the Publisher
     */
    protected $fillable = ['id', 'publisher', ];

    public function games() {
        return $this->hasMany(Game::class);
    }
}
