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
        Schema::create('flash_cards', function (Blueprint $table) {
            $table->id('card_id');
            $table->foreignId('deck_id')->references('deck_id')->on('decks')->onDelete('cascade');
            $table->foreignId('question_content_type_id')->references('content_typ_id')->on('content_typs');
            $table->foreignId('answer_content_type_id')->references('content_typ_id')->on('content_typs');
            $table->float('ease_factor')->default(2.5);
            $table->integer('interval')->default(0);
            $table->integer('repetitions')->default(0);
            $table->string('learning_stage')->default('learning');
            $table->dateTime('completed_date')->default(null)->nullable();
            $table->string('time_zone')->default('CET');;
            $table->integer('perfect')->default(0);
            $table->integer('easy')->default(0);
            $table->integer('good')->default(0);
            $table->integer('medium')->default(0);
            $table->integer('hard')->default(0);
            $table->integer('forgotten')->default(0);
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
        Schema::dropIfExists('flash_cards');
    }
};
