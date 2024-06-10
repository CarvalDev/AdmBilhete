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
       
        for($i=1;$i<=40;$i++){
            $bilhete = $bilheteModel->find($i);
            $passageiro = $bilhete->passageiro()->get();
            $passageiro = $passageiroModel->find($passageiro[0]->id);
            for($j=1;$j<=5;$j++){
                $formaPagamento = $formaPagamentoModel->find(fake()->numberBetween(1,3));
                $numeroDePassagens = fake()->numberBetween(1,30);
                Acao::factory([
                    'dataAcao' => fake()->dateTimeBetween('-1 month', now()),
                ])
                    ->for($passageiro)
                    ->has(Compra::factory([
                        'qtdPassagensCompra' => $numeroDePassagens,
                        'valorTotalCompra' => (4.4 * $numeroDePassagens)
                    ])
                    ->for($formaPagamento)
                    ->for($bilhete))
                    ->create();
            }

        }
        for($i=1;$i<13;$i++){
            for($j=1;$j<=40;$j++){
                $bilhete = $bilheteModel->find($i);
                $passageiro = $bilhete->passageiro()->get();
                $passageiro = $passageiroModel->find($passageiro[0]->id);
                for($k=1;$k<=2;$k++){
                    $formaPagamento = $formaPagamentoModel->find(fake()->numberBetween(1,3));
                    $numeroDePassagens = fake()->numberBetween(1,30);
                    Acao::factory([
                        'dataAcao' => fake()->dateTimeBetween('-'.($i +1). ' month', '-'.$i.' month'),
                    ])
                        ->for($passageiro)
                        ->has(Compra::factory([
                            'qtdPassagensCompra' => $numeroDePassagens,
                            'valorTotalCompra' => (4.4 * $numeroDePassagens)
                        ])
                        ->for($formaPagamento)
                        ->for($bilhete))
                        ->create();
                }
    
            }
        }
    }
}
