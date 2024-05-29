<?php

namespace Database\Seeders;

use App\Models\Ajuda;
use App\Models\Passageiro;
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
        
        $passageiros = Passageiro::all();

        
        foreach (Ajuda::all() as $ajuda) {
            
            $passageirosQueVotaram = [];

           
            if ($ajuda->votosAjuda()->exists()) {
                
                $passageirosQueVotaram = $ajuda->votosAjuda()->pluck('passageiro_id')->toArray();
            }

            
            foreach ($passageiros as $passageiro) {
                
                if (!in_array($passageiro->id, $passageirosQueVotaram)) {
                    
                    VotosAjuda::factory()->create([
                        'ajuda_id' => $ajuda->id,
                        'passageiro_id' => $passageiro->id,
                    ]);

                    
                    $passageirosQueVotaram[] = $passageiro->id;
                }
            }
        }
    }
}
