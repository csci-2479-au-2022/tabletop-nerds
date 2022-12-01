<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publisher>
 */
class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $letterA = fake()->randomLetter();
        $letterB = fake()->randomLetter();
        $letterC = fake()->randomLetter();

        return [
            'name' => fake()->name(),
            'publisher_code' => "{$letterA}{$letterB}{$letterC}",
        ];
    }
}
