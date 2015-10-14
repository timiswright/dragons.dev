<?php

use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $players = array(
      ['first_name' => 'Emily', 'last_name' => 'Rolls', 'email' => 'er@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => 'C', 'starred' => 1, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Emma', 'last_name' => 'Tabrett', 'email' => 'et@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Freddie', 'last_name' => 'Briscoe', 'email' => 'fb@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Hannah', 'last_name' => 'Ellis', 'email' => 'he@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 1, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Kate', 'last_name' => 'Trelawney Gower', 'email' => 'ktg@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Laura', 'last_name' => 'Shreeve', 'email' => 'ls@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 1, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Lizzie', 'last_name' => 'Moulton', 'email' => 'lm@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => 'C', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Maddie', 'last_name' => 'Denman', 'email' => 'md@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Marie', 'last_name' => 'James', 'email' => 'mj@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => 'GK', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Natalie', 'last_name' => 'Beal', 'email' => 'nb@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Rowie', 'last_name' => 'York-Smith', 'email' => 'rys@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Sarah', 'last_name' => 'Borrett', 'email' => 'sb@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 1, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Gail', 'last_name' => 'Thomas', 'email' => 'gs@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => 'C', 'starred' => 2, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Karen', 'last_name' => 'O`Neill-Simpson', 'email' => 'kos@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 2, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Donna', 'last_name' => 'Vaughan', 'email' => 'dv@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Rachel', 'last_name' => 'King', 'email' => 'rk@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 1, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Ally', 'last_name' => 'Windsor-Waite', 'email' => 'aw@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 2, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Amy', 'last_name' => 'Brown', 'email' => 'ab@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => 'GK', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Amy', 'last_name' => 'Forse', 'email' => 'af@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Angela', 'last_name' => 'Murgatroyd', 'email' => 'am@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Debs', 'last_name' => 'Smith', 'email' => 'ds@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => 'C', 'starred' => 0, 'rating' => 2.5, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Emma', 'last_name' => 'Gibb', 'email' => 'eg@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'George', 'last_name' => 'Stannett', 'email' => 'gs2@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 2, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Hannah', 'last_name' => 'Hardy', 'email' => 'hs@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 2, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Helen', 'last_name' => 'Kelly', 'email' => 'hk@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 2, 'rating' => 1.5, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Laura', 'last_name' => 'Bailey', 'email' => 'lb@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Lucy', 'last_name' => 'Hopgood', 'email' => 'lh@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => 'GK', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Natasha', 'last_name' => 'Blyth', 'email' => 'nb2@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Niamh', 'last_name' => 'Lowe-Davies', 'email' => 'nld@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 2, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Olivia', 'last_name' => 'Thomas', 'email' => 'ot@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Ruth', 'last_name' => 'Willmott', 'email' => 'rw@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Sarah', 'last_name' => 'Radley', 'email' => 'sr@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Alice', 'last_name' => 'Guest', 'email' => 'ag@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ],
      ['first_name' => 'Charly', 'last_name' => 'Burgess', 'email' => 'cb@hotmail.com', 'team_id' => '1', 'gender' => '0', 'mobile' => '07766302621', 'position' => '', 'starred' => 0, 'rating' => 2, 'login_hash' => str_random(6), 'created_at' => new DateTime, 'updated_at' => new DateTime, ]
    );

    DB::table('players')->insert($players);
    }
}
