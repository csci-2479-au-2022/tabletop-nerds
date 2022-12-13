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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('complexity_rating', 3, 2);
            $table->year('release_year');
            $table->foreignId('publisher_id')->constrained();
            $table->integer('playing_time_minutes')->unsigned();
            $table->integer('min_number_players')->unsigned();
            $table->integer('max_number_players')->unsigned();
            $table->text('image_url')->nullable;
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
        Schema::dropIfExists('games');
    }
};
