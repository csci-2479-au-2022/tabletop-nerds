<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Get the Category
     */
    protected $fillable = ['id', 'category', ];

    public function game() {
        return $this->belongsToMany(Game::class);
    }

    public function run()
    {
        //13 categories
        Category::factory()
            ->count(13)
            ->create();
    }
}
