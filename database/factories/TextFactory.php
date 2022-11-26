<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Text>
 */
class TextFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'card_id' => fake()->numberBetween(1, 10),
            'location_type' => fake()->randomElement(['front', 'back']),
            'text' => fake()->text(20),
        ];
    }
}
