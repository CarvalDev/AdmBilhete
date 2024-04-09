<?php

namespace Database\Seeders;

use App\Models\Ajuda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AjudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titulos = [
            'Como trocar o bilhete selecionado?',
            'Como visualizar informações do meu bilhete?',
            'Como consumir uma passagem?',
            'Como fazer uso da integração?',
            'Como fazer uma compra com o cartão de crédito?',
            'Como proteger os meus QrCodes?'
        ];
        $caminhos = [
            'Início->Config->Bilhetes->Trocar',
            'Início->Config->Bilhetes',
            'Início->QrCode',
            'Início->QrCode',
            'Início->Carteira',
            null,
        ];
        $descs = [
            'Na tela de bilhetes, aperte o botão trocar, assim será listado todos seus bilhetes ativos, basta selecionar
            o de sua preferência',
            'Clicando em configurações, depois em bilhetes será possível visualizar todas as informações do bilhete selecionado',
            'Basta acessar a tela de QrCode e aproxima-lo ao leitor de QrCodes de uma catraca',
            'Visualize na tela de início se há integração ativa no seu bilhete, caso haja, basta acessar
             a tela de QrCode e aproxima-lo ao leitor de QrCodes de uma catraca',
             'Acessando a carteira, basta selecionar o método de pagamento, selecionar a quantidade de passagens para comprar, depois é so verificar as informações
             e efetuar a compra',
            'Não compartilhe seus qrCodes com ninguém e procure utiliza-los apenas na hora do consumo'
             
        ];

        $ids = [
            '1','1','2','2','3','4'
        ];
        for($i = 0; $i < count($ids); $i++ )
        {
            Ajuda::create([
                'tituloAjuda' => $titulos[$i],
                'caminhoAjuda' => $caminhos[$i],
                'descAjuda' => $descs[$i],
                'statusAjuda' => 'Ativo',
                'categoriaAjuda_id' => $ids[$i]
            ]);
        }
    }
}
