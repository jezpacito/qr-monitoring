<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guest;
use Faker\Generator as Faker;

$factory->define(Guest::class, function (Faker $faker) {
    return [
        'fname' =>$faker->firstName,
        'lname' =>$faker->lastName,
        'address' =>$faker->address,
        'city' =>$faker->city,
        'prk_brgy' =>$faker->city,
        'contact_no' =>1234567878,
        'gender' =>$faker->randomElement([1,0]),
        'postal_code' =>$faker->randomElement([1121,2323,3434,45654,5433]),
        'email' =>$faker->email,
        'qr_code' =>$faker->randomNumber()
    ];
});
