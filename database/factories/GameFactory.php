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
            'id' => fake()->id(),
            'title' => fake()->title(),
            'complexity_rating' => fake()->complexity_rating(),
            'release_year' => fake()->release_year(),
            'publisher_id' => fake()->publisher_id(),
            'playing_time_minutes' => fake()->playing_time_minutes(),
            'min_number_players' => fake()->min_number_players(),
            'max_number_players' => fake()->max_number_players(),
            'timestamp' => fake()->timestamp(),
        ];
    }
}
