<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'complexity_rating',
        'release_year',
        'playing_time_minutes',
        'min_number_players',
        'max_number_playeres'];

    public function toString(): string
    {
        return "$this->title,
        Complexity Rating: $this->complexity_rating / 5.00,
        Average game time: $this->playing_time_minutes minutes,
        Players: $this->min_number_players - $this->max_number_players";
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
