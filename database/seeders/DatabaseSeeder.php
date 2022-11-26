<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;;
use \App\Models\Deck;
use \App\Models\UserRole;
use \App\Models\Content_typ;
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
    
        UserRole::create([
            "role_name" => "user",
        ]);

        UserRole::create([
            "role_name" => "admin",
        ]);

        User::factory(7)->create();


        Content_typ::create([
            "content_typ_number" => 1,
            "content_typ_name" => "text",
        ]);
        Content_typ::create([
            "content_typ_number" => 2,
            "content_typ_name" => "image",
        ]);
        Content_typ::create([
            "content_typ_number" => 3,
            "content_typ_name" => "audio",
        ]);
        Content_typ::create([
            "content_typ_number" => 4,
            "content_typ_name" => "video",
        ]);
        Content_typ::create([
            "content_typ_number" => 5,
            "content_typ_name" => "text and image",
        ]);
        Content_typ::create([
            "content_typ_number" => 6,
            "content_typ_name" => "text and audio",
        ]);
        Content_typ::create([
            "content_typ_number" => 7,
            "content_typ_name" => "text and video",
        ]);


        Deck::factory(5)->create();

        Flash_card::factory(10)->create();

        Text::factory(10)->create();
        Image::factory(10)->create();
        Audio::factory(10)->create();
        Video::factory(10)->create();
    }
}
