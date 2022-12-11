<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function isOnWishlist(): Attribute
    {
        // current (logged in) user id
        $userId = Auth::user()?->id;

        return Attribute::make(
            get: fn () =>
                // if book's users includes logged-in user
                $this->users->contains(fn ($user) => $user->id === $userId)
                    ? 'true'
                    : 'false',
        );
    }
}
