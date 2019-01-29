<?php

use Faker\Generator as Faker;

$factory->define(App\Ticket::Class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->name,
        'category' => $faker->name,
        'user' => $faker->name,
        'device' => $faker->randomDigit,
        'status_id' => '1',
    ];
});
