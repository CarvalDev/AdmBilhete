<?php

namespace Database\Seeders;

use App\Models\Adm;
use Hamcrest\NullDescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adm::create([
            'nomeAdm' => 'adm',
            'emailAdm' => 'adm@gmail.com',
            'senhaAdm' => '123',
            'fotoAdm' => null
        ]);
    }
}
