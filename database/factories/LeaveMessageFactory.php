<?php

use Faker\Generator as Faker;
use App\LeaveMessage;

$factory->define(App\LeaveMessage::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'email' => $faker->email,
        'Contact' => $faker->PhoneNumber(10),
        'companyName' => $faker->sentence,
        'YourMessage' => $faker->paragraph(6)
    ];
});
