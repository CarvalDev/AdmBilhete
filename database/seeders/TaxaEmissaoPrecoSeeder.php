<?php

namespace Database\Seeders;

use App\Models\Bilhete;
use App\Models\PedidoBilhete;
use App\Models\TaxaEmissao;
use App\Models\TaxaEmissaoPreco;
use App\Services\DataServices;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaxaEmissaoPrecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TaxaEmissaoPreco::create([
            'taxa' => '30.80'
        ]);
        for($i=1;$i<26;$i++){
            $pedido = PedidoBilhete::find($i); 
            TaxaEmissao::create([
                'pedido_bilhete_id' => $pedido->id,
                'taxa_emissao_preco_id' => '1',
                'created_at' => fake()->dateTimeBetween('-2 month', now())
            ]);
            Bilhete::factory([
                'passageiro_id' => $pedido->passageiro_id,
                'tipoBilhete' => $pedido->tipoBilhete,
                'statusBilhete' => 'Ativo'
            ])
            ->create();

        }
        for($i=51;$i<=75;$i++){
            Bilhete::find($i)->update([
                'qrCodeBilhete' => DataServices::qrCodeFetch($i)
            ]);
        }
    }
}
