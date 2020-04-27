<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permintaan;
use Faker\Generator as Faker;

$factory->define(Permintaan::class, function (Faker $faker) {
    return [
        'kode_permintaan' => $faker->numerify('PER###'),
        'tanggal' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gudang' => "gudang",
        'alamat_supplier' => $faker->address,
        'total_jenis_barang' => $faker->randomNumber(1),  
        'total_harga' => $faker->randomNumber(5),  
        'diskon' => $faker->randomNumber(5),
        'biaya_lain' => $faker->randomNumber(5),
    ];
});
