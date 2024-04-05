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
            'passagemPreco' => '3.80',
            'meiaPassagemPreco' => '1.90',
            'dataPreco' => '2017-01-01 00:00:00'
        ]);
        Preco::create([
            'dataPreco' => '2018-01-01 00:00:00',
            'passagemPreco' => '4.00',
            'meiaPassagemPreco' => '2.00'
        ]);
        Preco::create([
            'dataPreco' => '2020-01-01 00:00:00',
            'passagemPreco' => '4.30',
            'meiaPassagemPreco' => '2.15'
        ]);
        Preco::create([
            'dataPreco' => '2021-01-01 00:00:00',
            'passagemPreco' => '4.40',
            'meiaPassagemPreco' => '2.15'
        ]);
    }
}
