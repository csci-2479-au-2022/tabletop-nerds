<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    protected $fillable = ['id', 'title', 'rating', 'age', ];

    public function toString(): string
    {
        return "$this->title, Rating: $this->rating, Recommended age: $this->age";
    }

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->using(Wishlist::class);
    }

}
