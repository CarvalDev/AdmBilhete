<?php

namespace Database\Seeders;

use App\Models\TaxaEmissaoPreco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxaEmissaoPrecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaxaEmissaoPreco::create([
            'taxa' => '30.80'
        ]);
    }
}
