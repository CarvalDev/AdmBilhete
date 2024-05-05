<?php

namespace Database\Seeders;

use App\Models\PedidoBilhete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidosBilhetesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PedidoBilhete::factory(100)
        ->create();
    }
}
