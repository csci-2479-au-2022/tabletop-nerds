<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    /**
     * Get the Publisher
     */
    protected $fillable = ['id', 'publisher', ];

public function publisher() {
    return $this->has(Publisher::class);
}

    public function games() {
        return $this->hasMany(Game::class);
    }

    use HasFactory;
}
