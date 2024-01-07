<?php

namespace Database\Seeders;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Linha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Linha::factory(30)
            ->create();
        
    }
}
