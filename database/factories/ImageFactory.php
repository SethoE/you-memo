<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition()
    {
        $images = [
            "https://i.redd.it/jv53oq4sib2a1.png",
            "https://i.redd.it/1df04dhcicy91.png",
            "https://pbs.twimg.com/media/FifpXYMakAIZ_D3?format=jpg&name=medium",
            "https://pbs.twimg.com/media/FifwLAOagAADFrS?format=jpg&name=large",
            "https://pbs.twimg.com/media/FieqLp0UcAAke12?format=jpg&name=900x900"
         ];
        return [
            'card_id' => fake()->numberBetween(1, 10),
            'location_type' => fake()->randomElement(['front', 'back']),
            'url' => fake()->randomElement($images),
        ];
    }
}
