<?php

namespace Database\Seeders;

use App\Models\CategoriaAjuda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaAjudaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = ['Bilhetes', 'Consumos', 'Compras', 'QrCode'];
        $categoria = new CategoriaAjuda();
        for($i = 0; $i < count($categorias); $i++ )
        {
            $categoria->create([
                'nomeCategoria' => $categorias[$i]
            ]);
        }
    }
}
