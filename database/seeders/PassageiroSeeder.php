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
use App\Services\DataServices;
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
        Passageiro::factory([
            'password' => bcrypt('123')
        ])
            ->count(40)
            
            ->has(Acao::factory(2)
                ->has(Suporte::factory(1))
            )
            
            ->has(CartaoPassageiro::factory(1))
            ->has(Bilhete::factory(1)
                ->has(Passagem::factory(20))
            )
             
            
            ->create();

            //atualizanod o bilehte
            for($i=1;$i<=40;$i++){
                Bilhete::find($i)->update([
                    'qrCodeBilhete' => DataServices::qrCodeFetch($i)
                ]);
            }

            Passageiro::factory(10)
                ->has(Bilhete::factory(1))
                ->create();
            
    }
}
