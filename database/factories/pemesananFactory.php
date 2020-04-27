<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pemesanan;
use Faker\Generator as Faker;

$factory->define(Pemesanan::class, function (Faker $faker) {
    return [
        'kode_pemesanan' => $faker->numerify('PEM###'),
        'tanggal' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'gudang' => "gudang",
        'total_jenis_barang' => $faker->randomNumber(1),  
        'total_harga' => $faker->randomNumber(5),  
        'diskon' => $faker->randomNumber(5),
        'biaya_lain' => $faker->randomNumber(5),
    ];
});
