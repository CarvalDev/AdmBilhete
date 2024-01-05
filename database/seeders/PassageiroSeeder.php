<?php

namespace Database\Seeders;

use App\Models\Passageiro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassageiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passageiro::factory()
            ->count(40)
            ->create();
    }
}
