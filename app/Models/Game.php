<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'complexity_rating', 'release_year', 'publisher_id', 'playing_time_minutes', 'min_number_players', 'max_number_players', 'timestamp'];

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

    public function users() {
        return $this->belongsToMany(User::class)->using(Wishlist::class);
    }

}
