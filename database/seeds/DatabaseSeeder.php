<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            supplierSeeder::class,
            barangSeeder::class,
            akunSeeder::class,
            pajakSeeder::class,
            gudangSeeder::class,
            pengirimSeeder::class,
            permintaanSeeder::class,
            pemesananSeeder::class,
            penerimaanSeeder::class,
            fakturSeeder::class,
            returSeeder::class,
            hutangSeeder::class,
            pembayaranSeeder::class,
            jurnalSeeder::class,
        ]);
    }
}
