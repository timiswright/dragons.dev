<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Player::class, function (Faker\Generator $faker) {
    return [
        'team_id'  =>  $faker->randomElements($array = array ('1','2','3','4'), $count = 1),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender'  => $faker->randomElements($array = array ('1','0'), $count = 1),
        'mobile'  => $faker->numerify('077## ######'),
        'rating'  => $faker->randomElements($array = array ('1', '1.5', '2', '2.5', '3', '3.5', '4', '4.5', '5', '5.5', '6', '6.5', '7', '7.5'), $count = 1),
        'postition'  => $faker->randomElements($array = array (' ', 'C', 'GK'), $count = 1),
        'starred'  => $faker->randomElements($array = array ('1','0'), $count = 1),
        'login_hash'  => $faker->ean8,
    ];
});

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'date'  =>  $faker->dateTimeBetween($startDate = 'now', $endDate = '+2 years'),
        'locked' => '0',
    ];
});
