<?php

namespace Database\Seeders;

use App\Models\Acao;
use App\Models\Bilhete;
use App\Models\Compra;
use App\Models\Consumo;
use App\Models\FormaPagamento;
use App\Models\Passageiro;
use App\Models\Passagem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run(Passageiro $passageiro, Passagem $passagemModel, Bilhete $bilhete)
    {
        for($i=1;$i<=2000;$i++){
           
            $acao = Acao::create([
                'tipoAcao' => 'Consumo',
                'dataAcao' => fake()->dateTimeBetween('-1 week', time()),
                'passageiro_id' => fake()->numberBetween(1, 150),
            ]);
            $bilheteDoPassageiro = $passageiro->find($acao->passageiro_id)->bilhetes()->get(); 
             $passagemId = $bilhete
                                ->select('passagems.id as id')
                                ->join('passagems', 'bilhetes.id', 'passagems.bilhete_id')
                                ->where('statusPassagem', 'Ativa')
                                ->where('passagems.bilhete_id', $bilheteDoPassageiro[0]->id)
                                ->get();
            if(!isset($passagemId[0]->id))
            {
                $acao->delete();
                $i--;
            }else{
            Consumo::create([
                'passagem_id' => $passagemId[0]->id,
                'acao_id' => $acao->id,
                'carro_id' => fake()->numberBetween(1, 300),
            ]);
            $passagemModel->find($passagemId[0]->id)->update([
                'statusPassagem' => 'Inativa'
            ]);
            
        }
        }
        
    }
}
