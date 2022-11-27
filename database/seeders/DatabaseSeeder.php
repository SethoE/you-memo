<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;;
use \App\Models\Deck;
use \App\Models\Role;
use \App\Models\Content_type;
use \App\Models\Flash_card;
use App\Models\Text;
use App\Models\Image;
use App\Models\Audio;
use App\Models\Video;
;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        
        Role::create([
            "role_name" => "user",
        ]);

        Role::create([
            "role_name" => "admin",
        ]);

        User::factory(7)->create();


        Content_type::create([
            "Content_type_number" => 1,
            "Content_type_name" => "text",
        ]);
        Content_type::create([
            "Content_type_number" => 2,
            "Content_type_name" => "image",
        ]);
        Content_type::create([
            "Content_type_number" => 3,
            "Content_type_name" => "audio",
        ]);
        Content_type::create([
            "Content_type_number" => 4,
            "Content_type_name" => "video",
        ]);
        Content_type::create([
            "Content_type_number" => 5,
            "Content_type_name" => "text and image",
        ]);
        Content_type::create([
            "Content_type_number" => 6,
            "Content_type_name" => "text and audio",
        ]);
        Content_type::create([
            "Content_type_number" => 7,
            "Content_type_name" => "text and video",
        ]);


        Deck::factory(5)->create();

        Flash_card::factory(10)->create();

        Text::factory(10)->create();
        Image::factory(10)->create();
        Audio::factory(10)->create();
        Video::factory(10)->create();
    }
}
