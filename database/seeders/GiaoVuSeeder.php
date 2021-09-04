<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\giao_vu;

class GiaoVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        giao_vu::factory(10)->create();
    }
}
