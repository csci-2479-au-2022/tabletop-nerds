<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        return $this->belongsToMany(User::class)->using(GameUser::class)->withPivot(['rating', 'review']);
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

    public function averageRating(): Attribute
    {
        return Attribute::make(
            get: function () {
                Log::debug('[averageRating]', ['game' => $this]);
                $count = $this->users->count();
                $total = 0;

                if ($count === 0) return number_format(0, 1);

                foreach ($this->users as $user) {
                    $total += $user->pivot->rating;
                }

                Log::debug('[averageRating]', ['total' => $total]);

                return number_format($total / $count, 1);
            }
        );

    }
}
