<?php

namespace Database\Seeders;

use App\Models\Preco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preco::create([
            'passagemPreco' => '4.40',
            'meiaPassagemPreco' => '2.20',
        ]);

    }
}
