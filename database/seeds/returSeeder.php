<?php

use Illuminate\Database\Seeder;

class returSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Retur::class, 5)->create();
    }
}
