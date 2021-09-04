<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GiaoVuSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([GiaoVuSeeder::class]);
    }
}
