<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    protected $fillable = ['id', 'title', 'complexity_rating', 'release_year', 'publisher', 'playing_time_minutes', 'min_number_players', 'max_number_playeres'];

    public function toString(): string
    {
        return "$this->title, Complexity Rating: $this->complexity_rating, Publisher: $this->publisher, Average game time: $this->playing_time_minutes, Players: $this->min_number_players - $this->max_number_players";
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
