<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->bigInteger('team_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender', 1);
            $table->string('email');
            $table->string('mobile');
            $table->integer('rating');
            $table->string('position');
            $table->boolean('starred');
            $table->string('login_hash');
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
        Schema::drop('players');
    }
}
