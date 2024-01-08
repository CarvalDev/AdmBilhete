<?php

namespace Database\Seeders;

use App\Models\Acao;
use App\Models\Bilhete;
use App\Models\Carro;
use App\Models\CartaoPassageiro;
use App\Models\Compra;
use App\Models\Consumo;
use App\Models\FormaPagamento;
use App\Models\Passageiro;
use App\Models\Passagem;
use App\Models\Suporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassageiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Passageiro::factory()
            ->count(40)
            ->has(Acao::factory(10)
                ->has(Compra::factory(1)->for(FormaPagamento::find(1)))
            )
            ->has(Acao::factory(2)
                ->has(Suporte::factory(1))
            )
            
            ->has(CartaoPassageiro::factory(1))
            ->has(Bilhete::factory(1)
                ->has(Passagem::factory(20))
            )
             
            
            ->create();

        

            // Passageiro::factory()
            // ->count(40)
            // ->has(Acao::factory(10)
            //     ->has(Compra::factory(1)->for(FormaPagamento::find(1)))
            // )
             
            // ->make();
            
    }
}
