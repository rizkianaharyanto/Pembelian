<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pembayaran;
use Faker\Generator as Faker;

$factory->define(Pembayaran::class, function (Faker $faker) {
    return [
        'kode_pembayaran' => $faker->numerify('PH###'),
        'total' => $faker->randomNumber(5),  
        'tanggal' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
