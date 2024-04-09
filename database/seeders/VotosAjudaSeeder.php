<?php

namespace Database\Seeders;

use App\Models\VotosAjuda;
use Database\Factories\VotosAjudaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VotosAjudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<7;$i++){
            VotosAjuda::factory()
                ->count(100)
                ->create([
                    'ajuda_id' => $i
                ]);
        }
    }
}
