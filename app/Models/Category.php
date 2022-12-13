<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the Category
     */
    protected $fillable = ['name', 'category_code'];

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
