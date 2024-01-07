<?php

namespace Database\Seeders;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Linha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Catraca $catraca, Linha $linha)
    {
        $catracas = $catraca->all();
        $linhas = $linha->all();
        $j = 0;
        for($i=0;$i<count($catracas);$i++){
            Carro::create([
                'linha_id' => $linhas[$j]->id,
                'catraca_id' => $catracas[$i]->id,
                'numCarro' => fake()->numerify('###-###')
            ]);
            if(($i+1)%10==0){
                $j++;
            }
            
        }
    }
}
