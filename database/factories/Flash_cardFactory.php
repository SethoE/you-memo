<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flash_card>
 */
class Flash_cardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'deck_id' => fake()->numberBetween(1, 5),
            'question_content_type_id' => fake()->numberBetween(1,7),
            'answer_content_type_id' => fake()->numberBetween(1,7),
            'ease_factor' => fake()->numberBetween(1.3, 2.5),
            'interval' => fake()->numberBetween(0,30),
            'repetitions' => fake()->numberBetween(0, 4),
            'learning_stage' => fake()->randomElement(['learning', 'retaining', "new"]),
            'time_zone' => fake()->randomElement(['CET', 'CST']),
        ];
    }
}
