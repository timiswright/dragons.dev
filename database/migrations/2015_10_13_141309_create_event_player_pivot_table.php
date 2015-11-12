<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPlayerPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_player', function(Blueprint $table) {
            $table->integer('event_id')->unsigned()->index();
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->integer('player_id')->unsigned()->index();
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');
            $table->tinyInteger('availability')->nullable();
            $table->string('availability_notes');
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
        Schema::drop('event_player');
    }
}
