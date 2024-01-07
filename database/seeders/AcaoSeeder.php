<?php

namespace Database\Seeders;

use App\Models\Acao;
use App\Models\Compra;
use App\Models\Consumo;
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
        for($i=1;$i<=400;$i++){
           $acao = Acao::create([
                'tipoAcao' => 'Consumo',
                'dataAcao' => fake()->dateTimeBetween('-2 years', time()),
                'passageiro_id' => fake()->numberBetween(1, 40),
            ]);
            Consumo::create([
                'passagem_id' => fake()->numberBetween(1, 800),
                'acao_id' => $acao->id,
                'carro_id' => fake()->numberBetween(1, 300),
            ]);
        }
        
    }
}
