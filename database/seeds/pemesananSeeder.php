<?php

use Illuminate\Database\Seeder;

class pemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pemesanan::class, 5)->create();
    }
}
