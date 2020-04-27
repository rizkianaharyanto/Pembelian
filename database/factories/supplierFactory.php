<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'kode_supplier' => $faker->numerify('SUP###'),
        'nama_supplier' => $faker->name,
        'telp_supplier' => $faker->phoneNumber,
        'email_supplier' => $faker->unique()->safeEmail,  
        'alamat_supplier' => $faker->address,
    ];
});
