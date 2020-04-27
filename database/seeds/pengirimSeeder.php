<?php

use Illuminate\Database\Seeder;

class pengirimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pengirim::class, 5)->create();
    }
}
