<?php

namespace Database\Seeders;

use App\Models\Catraca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class catracaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Catraca::factory()
            ->count(20)
            ->create();
    }
}
