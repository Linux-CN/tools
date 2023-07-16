<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Completion>
 */
class CompletionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "source" => fake()->text(),
            "target" => fake()->text(),
            "token" => fake()->randomDigitNotNull(),
            "user_id" => fake()->numberBetween(1,10),
        ];
    }
}
