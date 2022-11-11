<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(3, true),
            'complexity_rating' => fake()->randomFloat(1, 1, 10),
            'release_year' => fake()->year(),
            'playing_time_minutes' => fake()->numberBetween(30, 240),
            'min_number_players' => fake()->numberBetween(1, 3),
            'max_number_players' => fake()->numberBetween(3, 7),
        ];
    }
}
