<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deck>
 */
class DeckFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $deck_names = [
            "4000 Essential English Words",
            "Chess Openings",
            "Colors",
            "English Test",
            "Learned Vocabulary Japanese",
            "Ultimate Geography",
            "Wanikani Ultimate 2: Electric Boogaloo"
        ];
        return [
            'user_id' => fake()->numberBetween(1, 7),
            'deck_name' => fake()->randomElement($deck_names),
        ];
    }
}
