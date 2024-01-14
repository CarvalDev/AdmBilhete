<?php

namespace Database\Seeders;

use App\Models\Reajuste;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReajusteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reajuste::create([
            'dataReajuste' => '2017-01-01 00:00:00',
            'precoPassagemReajuste' => '3.80',
            'precoMeiaPassagemReajuste' => '1.90'
        ]);
        Reajuste::create([
            'dataReajuste' => '2018-01-01 00:00:00',
            'precoPassagemReajuste' => '4.00',
            'precoMeiaPassagemReajuste' => '2.00'
        ]);
        Reajuste::create([
            'dataReajuste' => '2020-01-01 00:00:00',
            'precoPassagemReajuste' => '4.30',
            'precoMeiaPassagemReajuste' => '2.15'
        ]);
        Reajuste::create([
            'dataReajuste' => '2021-01-01 00:00:00',
            'precoPassagemReajuste' => '4.40',
            'precoMeiaPassagemReajuste' => '2.15'
        ]);
    }
}
