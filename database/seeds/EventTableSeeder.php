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
      ['date' => '2015-11-22', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-11-23', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-11-24', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-11-25', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
      ['date' => '2015-12-26', 'created_at' => new DateTime, 'updated_at' => new DateTime,],
    );

    DB::table('events')->insert($events);
    }
}
