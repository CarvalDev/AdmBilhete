<?php

namespace Database\Seeders;

use App\Models\Acao;
use App\Models\Compra;
use App\Models\FormaPagamento;
use App\Models\Passageiro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(Passageiro $passageiro)
    {
        $passageiro = $passageiro->find(1);
        $acao = Acao::factory()
            ->count(40)
            ->for($passageiro)
            ->has(Compra::factory()
                ->for(FormaPagamento::find(fake()->numberBetween(1,3)))
                ->count(1))
            ->create();
        
    }
}
