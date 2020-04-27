<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pengirim;
use Faker\Generator as Faker;

$factory->define(Pengirim::class, function (Faker $faker) {
    return [
        'kode_pengirim' => $faker->numerify('PENG###'),
        'nama_pengirim' => $faker->name,
        'telp_pengirim' => $faker->phoneNumber,
        'email_pengirim' => $faker->unique()->safeEmail,  
    ];
});
