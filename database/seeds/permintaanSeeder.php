<?php

use Illuminate\Database\Seeder;

class permintaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Permintaan::class, 5)->create();
    }
}
