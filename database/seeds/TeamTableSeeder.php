<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $teams = array(
      ['team_name' => 'Ladies 1s', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['team_name' => 'Ladies 2s', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['team_name' => 'Ladies 3s', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['team_name' => 'Ladies 4s', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['team_name' => 'Ladies 5s', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['team_name' => 'Ladies 6s', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['team_name' => 'Ladies 7s', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
    );

    DB::table('teams')->insert($teams);
    }
}
