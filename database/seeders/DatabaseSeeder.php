<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Catraca;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AdmSeeder::class,
            catracaSeeder::class,
            LinhaSeeder::class,
            CarroSeeder::class,
            FormaPagamentoSeeder::class,
            PassageiroSeeder::class,
            ReajusteSeeder::class,
            PrecoSeeder::class,
            AcaoSeeder::class,
            CompraSeeder::class,

        ]);
    }
}
