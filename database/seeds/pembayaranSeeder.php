<?php

use Illuminate\Database\Seeder;

class pembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pembayaran::class, 5)->create();
    }
}
