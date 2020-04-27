<?php

use Illuminate\Database\Seeder;

class hutangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Hutang::class, 5)->create();
    }
}
