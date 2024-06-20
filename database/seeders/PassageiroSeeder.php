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

            //atualizando fotos de perfil dos primeiros 14 passageiros

            for($i =1;$i<=20;$i++){

                Passageiro::find($i)->update([
                    'fotoPassageiro' => $i.".png"
                ]);
            }

            Passageiro::factory(10)
            ->has(Bilhete::factory(1))
            ->create();

            $j = 21;
            for($i = 41;$i<=50;$i++){
                Passageiro::find($i)->update([
                    'fotoPassageiro' => $j.".png"
                ]);
                $j++;
            }

          
            //atualizando o bilhete
            for($i=1;$i<=50;$i++){
                Bilhete::find($i)->update([
                    'qrCodeBilhete' => DataServices::qrCodeFetch($i)
                ]);
            }

            Passageiro::create([
                'nomePassageiro' => "Samuel Souza",
                'dataNascPassageiro' => "2003-05-19",
                'generoPassageiro' => "M",
                'cpfPassageiro' => "505.239.368-77",
                'numTelPassageiro' => "(11) 99331-0815",
                'logrPassageiro' => "Rua das Neves",
                'numLogrPassageiro' => "12",
                'complementoLogrPassageiro' => "Casa 2",
                'ufPassageiro' => "SP",
                'bairroPassageiro' => "Vila Curuça",
                'cepPassageiro' => "05767-011",
                'fotoPassageiro' => "samu.png",
                'emailPassageiro' => "samuelsouza0225@gmail.com",
                'password' => null,
            ]);

            
            
    }
}
