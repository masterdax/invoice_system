<?php

use Faker\Generator as Faker;

$factory->define(App\ClientDetail::class, function (Faker $faker) {
    return [
       
        "client_name" =>$faker->name,
        "client_contact" =>$faker->PhoneNumber(10),
        "client_email" =>$faker->email,
        "gst_no" =>$faker->PhoneNumber(10),
        "client_address" =>$faker->address,

    ];
});
