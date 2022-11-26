<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Audio>
 */
class AudioFactory extends Factory
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
            'url' => fake()->url('/storage/audio/1.wav'),
        ];
    }
}
