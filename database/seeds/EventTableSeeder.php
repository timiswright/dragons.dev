<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $events = array(
      ['date' => '2015-11-01', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-11-07', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-11-14', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-11-28', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-12-02', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
    );

    DB::table('events')->insert($events);
    }
}
