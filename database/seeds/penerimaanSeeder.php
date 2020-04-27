<?php

use Illuminate\Database\Seeder;

class penerimaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Penerimaan::class, 5)->create();
    }
}
