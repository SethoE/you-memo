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
    public function up()
    {
        Schema::create('decks', function (Blueprint $table) {
            $table->id('deck_id');
            $table->foreignId('user_id')->references('user_id')->on('users')->constrained()->onDelete('cascade');
            $table->string('deck_name');
            $table->boolean('deck_status')->default(false);
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('aktive_since')->nullable();
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
        Schema::dropIfExists('decks');
    }
};
