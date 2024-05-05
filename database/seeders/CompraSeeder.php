<?php

namespace Database\Seeders;

use App\Models\Acao;
use App\Models\Bilhete;
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
    public function run(Passageiro $passageiroModel, Bilhete $bilheteModel, FormaPagamento $formaPagamentoModel)
    {
       
        for($i=1;$i<=150;$i++){
            $bilhete = $bilheteModel->find($i);
            $passageiro = $bilhete->passageiro()->get();
            $passageiro = $passageiroModel->find($passageiro[0]->id);
            for($j=1;$j<=5;$j++){
                $formaPagamento = $formaPagamentoModel->find(fake()->numberBetween(1,3));
                Acao::factory(1)
                    ->for($passageiro)
                    ->has(Compra::factory(1)
                    ->for($formaPagamento)
                    ->for($bilhete))
                    ->create();
            }

        }
    }
}
