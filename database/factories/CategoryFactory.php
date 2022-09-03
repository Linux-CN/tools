<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'guid' => fake()->uuid(),
            'keywords' => implode(',', fake()->words(3)),
            'thumbnail' => fake()->imageUrl(),
            'description' => fake()->paragraph(3)
        ];
    }
}
