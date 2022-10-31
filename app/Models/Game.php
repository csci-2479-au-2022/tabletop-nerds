<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    public function __construct(
        public int $id,
        public string $title,
        public int $rating,
        public string $age,
    ){

    }

    public function toString(): string
    {
        return "$this->title, Rating: $this->rating, Recommended age: $this->age";
    }

    public function publisher() {
        return $this->belongsTo(Publisher::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class);
    }

}
