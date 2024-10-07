<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\DummyBusinessSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            //BarcodesTableSeeder::class,
            //PermissionsTableSeeder::class,
            //CurrenciesTableSeeder::class,
            UserTableSeeder::class,
            DummyBusinessSeeder::class
        ]);
    }
}
