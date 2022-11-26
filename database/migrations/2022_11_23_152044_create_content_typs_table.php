<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     
    // 1 = text, 2 = audio, 4 = video
    // text and audio = 3
    // text and video = 5
    // audio and video = 6 example: gif + audio
    // text, audio and video = 7
    public function up()
    {
        Schema::create('content_typs', function (Blueprint $table) {
            $table->id('content_typ_id');
            $table->integer('content_typ_number');
            $table->string('content_typ_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_typs');
    }
};
