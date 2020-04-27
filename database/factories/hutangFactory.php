<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hutang;
use Faker\Generator as Faker;

$factory->define(Hutang::class, function (Faker $faker) {
    return [
        'kode_supplier' => $faker->numerify('HUT###'),
        'total_hutang' => $faker->randomNumber(5),
        'total_lunas' => $faker->randomNumber(5),
        'total_sisa' => $faker->randomNumber(5),
    ];
});
