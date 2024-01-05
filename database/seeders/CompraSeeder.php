<?php

namespace Database\Seeders;

use App\Models\Acao;
use App\Models\Compra;
use App\Models\FormaPagamento;
use App\Models\Passageiro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run(Passageiro $passageiro)
    {
        $passageiro = $passageiro->find(1);
        $formaPagamento = FormaPagamento::find(fake()->numberBetween(1,3));
        Compra::factory()
            ->count(30)
            ->for($formaPagamento)
            ->for(Acao::factory()
                    
                    ->for($passageiro), 'acao'
                     )
            ->create();
        
    }
}
