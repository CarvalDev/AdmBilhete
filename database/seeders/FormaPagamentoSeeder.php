<?php

namespace Database\Seeders;

use App\Models\FormaPagamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormaPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormaPagamento::create([
            'descFormaPagamento' => 'Cartao',
        ]);  

        FormaPagamento::create([
            'descFormaPagamento' => 'Pix',
        ]);
        FormaPagamento::create([
            'descFormaPagamento' => 'Boleto',
        ]);
    }
}
