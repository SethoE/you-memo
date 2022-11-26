<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $videos = [
            "/storage/video/1.mp4",
            "/storage/video/2.mp4",
            "/storage/video/3.mp4",
            "/storage/video/4.mp4",
        ];
        return [
            'card_id' => fake()->numberBetween(1, 10),
            'location_type' => fake()->randomElement(['front', 'back']),
            'url' => fake()->randomElement($videos),
        ];
    }
}
