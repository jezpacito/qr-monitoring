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
        'prk_brgy' =>$faker->citySuffix,
        'contact_no'=>'1221212121',
        'gender' =>$faker->randomElement([1,0]),
        'postal_code' =>1234,
        'email' =>$faker->email,
        'qr_code'=>'1231212qr',
        
    ];
});
