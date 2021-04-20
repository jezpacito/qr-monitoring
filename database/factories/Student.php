<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'firstname' =>$faker->firstName(),
        'lastname' =>$faker->lastName,
        'id_number' =>$faker->randomNumber(),
        'course' =>$faker->randomElements(['BSIT','BSCS','BScoE'])
    ];
});
